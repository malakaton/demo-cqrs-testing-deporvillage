<?php

declare(strict_types=1);

namespace App\Tests\Stubs\ReturnOrder\ValueObject;

use App\Shared\Domain\ValueObject\Country;
use App\Tests\Stubs\ValueObject\MotherCreator;

final class CountryMother
{
    public static function create(string $value): Country
    {
        return new Country($value);
    }

    public static function random(): Country
    {
        return self::create(MotherCreator::random()->countryCode());
    }
}
