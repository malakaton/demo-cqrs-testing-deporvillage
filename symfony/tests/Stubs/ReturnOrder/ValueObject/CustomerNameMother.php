<?php

declare(strict_types=1);

namespace App\Tests\Stubs\ReturnOrder\ValueObject;

use App\ReturnOrder\Domain\ValueObject\CustomerName;
use App\Tests\Stubs\ValueObject\StringMother;

final class CustomerNameMother
{
    public static function create(string $value): CustomerName
    {
        return new CustomerName($value);
    }

    public static function random(): CustomerName
    {
        return self::create(StringMother::random());
    }
}
