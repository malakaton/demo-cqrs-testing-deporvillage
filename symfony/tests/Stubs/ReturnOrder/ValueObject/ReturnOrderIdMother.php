<?php

declare(strict_types=1);

namespace App\Tests\Stubs\ReturnOrder\ValueObject;

use App\ReturnOrder\Domain\ValueObject\ReturnOrderId;
use App\Tests\Stubs\ValueObject\MongoIdMother;

final class ReturnOrderIdMother
{
    public static function create(string $value): ReturnOrderId
    {
        return new ReturnOrderId($value);
    }

    public static function random(): ReturnOrderId
    {
        return self::create(MongoIdMother::random()->value());
    }
}
