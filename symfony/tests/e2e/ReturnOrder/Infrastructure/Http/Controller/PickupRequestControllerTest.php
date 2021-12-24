<?php

declare(strict_types=1);

namespace App\Tests\e2e\ReturnOrder\Infrastructure\Http\Controller;

use App\ReturnOrder\Domain\Strategy\CarrierReturnCodeStrategy;
use App\Tests\e2e\Shared\Infrastructure\Http\Controller\EntryPointTestCase;
use App\Tests\Fixtures\DataFixtures\ReturnOrderFixtures;
use App\Tests\Stubs\ReturnOrder\ValueObject\ReturnOrderIdMother;
use Symfony\Component\HttpFoundation\Response;

final class PickupRequestControllerTest extends EntryPointTestCase
{
    /**
     * @test
     */
    public function return_order_not_found_exception(): void
    {
        $this->client->request(
            'GET',
            sprintf("/return-order/%s/pickup", ReturnOrderIdMother::random()),
            [],
            [],
            ['CONTENT_TYPE' => 'application/json']
        );

        self::assertEquals(Response::HTTP_INTERNAL_SERVER_ERROR, $this->client->getResponse()->getStatusCode());
        self::assertEquals('"Resource not found"', $this->client->getResponse()->getContent());
    }

    /**
     * @test
     */
    public function get_pickup_code_request_works(): void
    {
        $returnOrder = ReturnOrderFixtures::getFixturesRepository(ReturnOrderFixtures::RETURN_ORDER_COUNTRY);

        $this->client->request(
            'GET',
            "/return-order/{$returnOrder->id()->value()}/pickup",
            [],
            [],
            ['CONTENT_TYPE' => 'application/json']
        );

        self::assertEquals(Response::HTTP_OK, $this->client->getResponse()->getStatusCode());
        self::assertEquals(
            CarrierReturnCodeStrategy::ES_CODE,
            json_decode($this->client->getResponse()->getContent())->carrier_pickup_code
        );
    }
}
