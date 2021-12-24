<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;

abstract class BoolValueObject
{
    protected bool $value;

    public function __construct(bool $value)
    {
        $this->value = $value;
    }

    public function value(): bool
    {
        return $this->value;
    }
}
