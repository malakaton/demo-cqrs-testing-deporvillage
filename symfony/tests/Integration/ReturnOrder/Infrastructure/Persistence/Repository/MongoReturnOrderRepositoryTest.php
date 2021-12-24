<?php

declare(strict_types=1);

namespace App\Tests\Integration\ReturnOrder\Infrastructure\Persistence\Repository;

use App\ReturnOrder\Infrastructure\Persistence\Repository\MongoReturnOrderRepository;
use App\Shared\Infrastructure\Persistence\ReadModel\Exception\NotFoundException;
use App\Tests\Fixtures\DataFixtures\ReturnOrderFixtures;
use App\Tests\Fixtures\FixturesTrait;
use App\Tests\Integration\Shared\Application\ApplicationTestCase;
use App\Tests\Stubs\ReturnOrder\ValueObject\ReturnOrderIdMother;

class MongoReturnOrderRepositoryTest extends ApplicationTestCase
{
    use FixturesTrait;

    private MongoReturnOrderRepository $mongoReturnOrderRepository;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mongoReturnOrderRepository = self::getContainer()->get(MongoReturnOrderRepository::class);
    }

    /**
     * @test
     *
     */
    public function save_get_return_order_must_works(): void
    {
        $this->loadFixtures(
            [
                ReturnOrderFixtures::class,
            ]
        );

        $returnOrder = ReturnOrderFixtures::getFixturesRepository(ReturnOrderFixtures::RETURN_ORDER_EMPTY);

        $found = $this->mongoReturnOrderRepository->getById($returnOrder->id());

        self::assertEquals($returnOrder, $found);
        self::assertNotSame($returnOrder, $found);
    }

    /**
     * @test
     *
     */
    public function repository_throw_exception_if_return_order_not_found(): void
    {
        $this->expectException(NotFoundException::class);

        $this->mongoReturnOrderRepository->getById(ReturnOrderIdMother::random());
    }
}
