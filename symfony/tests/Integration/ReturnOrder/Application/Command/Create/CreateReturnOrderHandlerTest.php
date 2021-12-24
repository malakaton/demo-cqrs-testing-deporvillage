<?php

declare(strict_types=1);

namespace App\Tests\Integration\ReturnOrder\Application\Command\Create;

use App\ReturnOrder\Application\Command\Create\CreateReturnOrderCommand;
use App\ReturnOrder\Domain\ValueObject\ReturnOrderId;
use App\Shared\Domain\ValueObject\MongoId;
use App\Tests\Integration\Shared\Application\ApplicationTestCase;
use App\Tests\Stubs\ReturnOrder\ValueObject\CountryMother;
use App\Tests\Stubs\ReturnOrder\ValueObject\CustomerNameMother;
use Exception;
use Throwable;

class CreateReturnOrderHandlerTest extends ApplicationTestCase
{
    /**
     * @test
     *
     * @throws Exception
     * @throws Throwable
     */
    public function command_handler_must_fire_domain_event(): void
    {
        $command = new CreateReturnOrderCommand(
            CustomerNameMother::random()->value(),
            CountryMother::random()->value(),
            MongoId::random()->value()
        );

        $returnOrderId = $this->handle($command);

        self::assertInstanceOf(ReturnOrderId::class, $returnOrderId);
        self::assertNotNull($returnOrderId);
    }
}
