<?php

declare(strict_types=1);

namespace App\Tests\Unit\ReturnOrder\Application\Command\Create;

use App\ReturnOrder\Application\Command\Create\CreateReturnOrderCommand;
use App\ReturnOrder\Domain\ValueObject\CustomerName;
use App\Shared\Domain\ValueObject\Country;
use App\Shared\Domain\ValueObject\MongoId;

final class CreateReturnCommandMother
{
    public static function create(
        CustomerName $customerName,
        Country $country,
        MongoId $orderUuid
    ): CreateReturnOrderCommand
    {
        return new CreateReturnOrderCommand(
            $customerName->value(),
            $country->value(),
            $orderUuid->value()
        );
    }
}
