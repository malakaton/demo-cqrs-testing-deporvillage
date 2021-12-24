<?php

declare(strict_types=1);

namespace App\Tests\Unit\Mocks\ReturnOrder\Infrastructure\Persistence\Repository;

use App\ReturnOrder\Domain\Model\ReturnOrder;
use App\ReturnOrder\Domain\Repository\ReturnOrderRepository;
use App\ReturnOrder\Domain\ValueObject\CustomerName;
use App\ReturnOrder\Domain\ValueObject\ReturnOrderId;
use App\Shared\Domain\ValueObject\Country;
use App\Shared\Domain\ValueObject\MongoId;
use App\Tests\Unit\Shared\Infrastructure\PhpUnit\UnitTestCase;
use Mockery\MockInterface;

abstract class MongoReturnOrderRepositoryUnitTestCase extends UnitTestCase
{
    /**
     * @var $repository ReturnOrderRepository|MockInterface
     */
    private $repository;

    protected function shouldGetById(ReturnOrder $returnOrder): void
    {
        $this->MockRepository()
            ->expects('getById')
            ->with(\Mockery::on(function($argument) use ($returnOrder) {
                $this->assertInstanceOf(ReturnOrderId::class, $argument);

                $this->assertEquals($argument->value(), $returnOrder->id()->value());

                return true;
            }))
            ->once()
            ->andReturn($returnOrder);
    }

    protected function shouldSave(ReturnOrder $returnOrder): void
    {
        $this->MockRepository()
            ->expects('save')
            ->with(\Mockery::on(function($argument) use ($returnOrder) {
                $this->assertInstanceOf(ReturnOrder::class, $argument);
                $this->assertInstanceOf(ReturnOrderId::class, $argument->id());
                $this->assertInstanceOf(CustomerName::class, $argument->customerName());
                $this->assertInstanceOf(Country::class, $argument->country());
                $this->assertInstanceOf(MongoId::class, $argument->orderUuid());

                $this->assertEquals($argument->customerName(), $returnOrder->customerName());
                $this->assertEquals($argument->country(), $returnOrder->country());

                return true;
            }))
            ->andReturnNull();
    }

    /** @return ReturnOrderRepository|MockInterface */
    protected function MockRepository(): MockInterface
    {
        return $this->repository = $this->repository ?: $this->mock(ReturnOrderRepository::class);
    }
}
