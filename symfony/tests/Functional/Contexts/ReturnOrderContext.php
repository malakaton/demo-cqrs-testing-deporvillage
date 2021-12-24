<?php

declare(strict_types=1);

namespace App\Tests\Functional\Contexts;

use App\Tests\Fixtures\DataFixtures\ReturnOrderFixtures;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Doctrine\ODM\MongoDB\DocumentManager;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Response as ResponseGuzzle;
use Symfony\Component\HttpKernel\KernelInterface;
use Webmozart\Assert\Assert;

final class ReturnOrderContext implements Context
{
    private Response $response;
    private KernelInterface $kernel;
    private DocumentManager $documentManager;
    private FixturesLoader $fixturesLoader;

    public function __construct(KernelInterface $kernel, DocumentManager $documentManager, FixturesLoader $fixturesLoader)
    {
        $this->kernel = $kernel;
        $this->documentManager = $documentManager;
        $this->fixturesLoader = $fixturesLoader;
    }

    /**
     * @BeforeScenario @fixtures
     */
    public function fixture(): void
    {
        $this->fixturesLoader->load(
            [
                ReturnOrderFixtures::class
            ]
        );
    }

    /**
     * @Given /^User wants to return an order$/
     */
    public function userWantsToCreateTheFollowingReturnOrder(PyStringNode $returnOrder): void
    {
        $this->sendRequest(
            '/return-order',
            Request::METHOD_POST,
            json_decode((string)$returnOrder, true)
        );
    }

    /**
     * @When I request to get pickup code from return order from country :countryCode
     * @param string $countryCode
     * @throws Exception
     */
    public function iRequestToGetPickupRequestCode(string $countryCode): void
    {
        $this->fixturesLoader->load(
            [
                ReturnOrderFixtures::class
            ],
            [
                'country' => $countryCode
            ]
        );

        $returnOrder = ReturnOrderFixtures::getFixturesRepository(ReturnOrderFixtures::RETURN_ORDER_COUNTRY);

        $this->sendRequest(sprintf('return-order/%s/pickup', $returnOrder->id()->value()));
    }

    /**
     * @Then pickup code must be :pickupCode
     */
    public function pickupRequestShouldBeGenerated(int $pickupCode): void
    {
        $actualResponse = $this->responseAsArray();

        Assert::same(ResponseGuzzle::HTTP_OK, $this->response->getStatusCode());
        Assert::eq($pickupCode, $actualResponse['carrier_pickup_code']);
    }

    /**
     * @Then /^return order should be created$/
     * @throws Exception
     */
    public function returnOrderShouldBeCreated(): void
    {
        Assert::same(ResponseGuzzle::HTTP_CREATED, $this->response->getStatusCode());
    }

    private function sendRequest(string $uri, string $method = Request::METHOD_GET, array $data = []): void
    {
        $content = !empty($data) ? json_encode($data) : null;

        $this->response = $this->kernel->handle(
            Request::create(
                $uri,
                $method,
                ['CONTENT_TYPE' => 'application/json'],
                [],
                [],
                [],
                $content
            )
        );
    }

    /**
     * @return array
     * @throws Exception
     */
    private function responseAsArray(): array
    {
        $output = $this->response->getContent();

        return ($this->response->getStatusCode() === ResponseGuzzle::HTTP_NOT_FOUND) ? [] : json_decode($output, true) ?? [];
    }
}
