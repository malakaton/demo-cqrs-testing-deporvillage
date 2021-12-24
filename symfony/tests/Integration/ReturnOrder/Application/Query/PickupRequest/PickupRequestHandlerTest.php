<?php

declare(strict_types=1);

namespace App\Tests\Integration\ReturnOrder\Application\Query\PickupRequest;

use App\ReturnOrder\Application\Query\PickupRequest\PickupRequestQuery;
use App\ReturnOrder\Domain\Strategy\CarrierReturnCodeStrategy;
use App\Tests\Fixtures\DataFixtures\ReturnOrderFixtures;
use App\Tests\Fixtures\FixturesTrait;
use App\Tests\Integration\Shared\Application\ApplicationTestCase;
use Exception;
use Throwable;

class PickupRequestHandlerTest extends ApplicationTestCase
{
    use FixturesTrait;

    /**
     * @test
     *
     * @throws Exception
     * @throws Throwable
     */
    public function query_handler_must_return_right_pickup_code_for_spain(): void
    {

        $this->loadFixtures(
            [
                ReturnOrderFixtures::class,
            ],
            [
                'country' => 'ES'
            ]
        );

        $returnOrder = ReturnOrderFixtures::getFixturesRepository(ReturnOrderFixtures::RETURN_ORDER_COUNTRY);

        $query = new PickupRequestQuery($returnOrder->id()->value());

        $result = $this->ask($query);

        self::assertEquals(CarrierReturnCodeStrategy::ES_CODE, $result->resource['carrier_pickup_code']);
    }

    /**
     * @test
     *
     * @throws Exception
     * @throws Throwable
     */
    public function query_handler_must_return_right_pickup_code_for_uk(): void
    {

        $this->loadFixtures(
            [
                ReturnOrderFixtures::class,
            ],
            [
                'country' => 'GB'
            ]
        );

        $returnOrder = ReturnOrderFixtures::getFixturesRepository(ReturnOrderFixtures::RETURN_ORDER_COUNTRY);

        $query = new PickupRequestQuery($returnOrder->id()->value());

        $result = $this->ask($query);

        self::assertEquals(CarrierReturnCodeStrategy::GB_CODE, $result->resource['carrier_pickup_code']);
    }
}
