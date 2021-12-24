<?php

declare(strict_types=1);

namespace App\Tests\Unit\ReturnOrder\Application\Query\PickupRequest;

use App\ReturnOrder\Application\Query\PickupRequest\PickupRequestHandler;
use App\Shared\Application\Query\Item;
use App\Tests\Stubs\ReturnOrder\ReturnOrderMother;
use App\Tests\Unit\Mocks\ReturnOrder\Domain\Strategy\CarrierReturnCodeStrategyMockTestCase;
use App\Tests\Unit\Mocks\ReturnOrder\Infrastructure\Persistence\Repository\MongoReturnOrderRepositoryUnitTestCase;
use Prophecy\Prophecy\ObjectProphecy;

final class PickupRequestHandlerTest extends MongoReturnOrderRepositoryUnitTestCase
{
    private PickupRequestHandler $handler;
    private CarrierReturnCodeStrategyMockTestCase $carrierReturnCodeStrategyMock;

    protected function setUp(): void
    {
        parent::setUp();

        $this->carrierReturnCodeStrategyMock = CarrierReturnCodeStrategyMockTestCase::create();

        $this->handler = new PickupRequestHandler(
            $this->MockRepository(),
            $this->carrierReturnCodeStrategyMock->MockStrategy()->reveal()
        );
    }

    /**
     * @test
     */
    public function it_should_return_pickup_code_for_carrier(): void
    {
        $returnOrder = ReturnOrderMother::random();

        $command = PickupRequestQueryMother::create(
            $returnOrder->id()->value()
        );

        $this->shouldGetById($returnOrder);

        $this->carrierReturnCodeStrategyMock->shouldReturnPickupCode($returnOrder->country());

        /**@var Item $result**/
        $result = $this->dispatchQuery($command, $this->handler);

        self::assertInstanceOf(Item::class, $result);
        self::assertSame('carrierReturnCode', $result->type);
        self::assertNotNull($result->resource['carrier_pickup_code']);
    }
}
