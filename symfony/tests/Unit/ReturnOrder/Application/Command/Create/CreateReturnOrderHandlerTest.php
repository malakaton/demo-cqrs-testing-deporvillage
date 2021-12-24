<?php

declare(strict_types=1);

namespace App\Tests\Unit\ReturnOrder\Application\Command\Create;

use App\ReturnOrder\Application\Command\Create\CreateReturnOrderHandler;
use App\Tests\Stubs\ReturnOrder\ReturnOrderMother;
use App\Tests\Stubs\ReturnOrder\ValueObject\CountryMother;
use App\Tests\Stubs\ReturnOrder\ValueObject\CustomerNameMother;
use App\Tests\Stubs\ValueObject\MongoIdMother;
use App\Tests\Unit\Mocks\ReturnOrder\Infrastructure\Persistence\Repository\MongoReturnOrderRepositoryUnitTestCase;

final class CreateReturnOrderHandlerTest extends MongoReturnOrderRepositoryUnitTestCase
{
    private CreateReturnOrderHandler $handler;

    protected function setUp(): void
    {
        parent::setUp();

        $this->handler = new CreateReturnOrderHandler(
            $this->MockRepository()
        );
    }

    /**
     * @test
     */
    public function it_should_save_return_order(): void
    {
        $command = CreateReturnCommandMother::create(
            CustomerNameMother::random(),
            CountryMother::random(),
            MongoIdMother::random()
        );

        $returnOrder = ReturnOrderMother::fromRequest(
            $command
        );

        $this->shouldSave($returnOrder);

        self::assertNotNull($this->dispatch($command, $this->handler));
    }
}
