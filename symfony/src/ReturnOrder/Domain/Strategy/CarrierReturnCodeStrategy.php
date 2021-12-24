<?php

declare(strict_types=1);

namespace App\ReturnOrder\Domain\Strategy;

use App\Shared\Domain\ValueObject\Country;

class CarrierReturnCodeStrategy
{
    public const ES_CODE = 30;
    public const GB_CODE = 60;

    private array $codesByCountry = [
        'ES' => self::ES_CODE,
        'GB' => self::GB_CODE
    ];

    public function calculateReturnCode(Country $country): int
    {
        return $this->codesByCountry[$country->value()] ?? 0;
    }
}
