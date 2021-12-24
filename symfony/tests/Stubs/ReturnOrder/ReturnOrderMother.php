<?php

declare(strict_types=1);

namespace App\Tests\Stubs\ReturnOrder;

use App\ReturnOrder\Application\Command\Create\CreateReturnOrderCommand;
use App\ReturnOrder\Domain\ValueObject\CustomerName;
use App\ReturnOrder\Domain\ValueObject\ReturnOrderId;
use App\ReturnOrder\Domain\Model\ReturnOrder;
use App\Shared\Domain\ValueObject\Country;
use App\Shared\Domain\ValueObject\MongoId;
use App\Tests\Stubs\ReturnOrder\ValueObject\CountryMother;
use App\Tests\Stubs\ReturnOrder\ValueObject\CustomerNameMother;
use App\Tests\Stubs\ReturnOrder\ValueObject\ReturnOrderIdMother;
use App\Tests\Stubs\ValueObject\MongoIdMother;

final class ReturnOrderMother
{
    public static function create(
        ReturnOrderId $uuid,
        CustomerName $customerName,
        Country $country,
        MongoId $orderUuid
    ): ReturnOrder
    {
        return ReturnOrder::create(
            $uuid,
            $customerName,
            $country,
            $orderUuid
        );
    }

    public static function fromRequest(
        CreateReturnOrderCommand $request
    ): ReturnOrder
    {
        return self::create(
            ReturnOrderIdMother::random(),
            $request->customerName(),
            $request->country(),
            $request->orderUuid()
        );
    }

    public static function random(): ReturnOrder
    {
        return self::create(
            ReturnOrderIdMother::random(),
            CustomerNameMother::random(),
            CountryMother::random(),
            MongoIdMother::random()
        );
    }
}
