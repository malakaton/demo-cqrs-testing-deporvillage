<?php

declare(strict_types=1);

namespace App\Tests\Fixtures\Builder;

use App\ReturnOrder\Domain\Model\ReturnOrder;
use App\Tests\Stubs\ReturnOrder\ValueObject\CountryMother;
use App\Tests\Stubs\ReturnOrder\ValueObject\CustomerNameMother;
use App\Tests\Stubs\ReturnOrder\ValueObject\ReturnOrderIdMother;
use App\Tests\Stubs\ValueObject\MongoIdMother;

class ReturnOrderBuilder
{
    private array $attributes;

    /**
     * ReturnOrderBuilder constructor.
     */
    private function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public static function createEmpty(): self
    {
        return new self(
            [
                'id' => ReturnOrderIdMother::random(),
                'customer_name' => CustomerNameMother::random(),
                'country' => CountryMother::random(),
                'order_id' => MongoIdMother::random()
            ]
        );
    }

    public function withCountry(string $country): self
    {
        $this->attributes['country'] = CountryMother::create($country);

        return $this;
    }

    public function getWriteReturnOrder(): ReturnOrder
    {
        return ReturnOrder::create(
            $this->attributes['id'],
            $this->attributes['customer_name'],
            $this->attributes['country'],
            $this->attributes['order_id']
        );
    }
}