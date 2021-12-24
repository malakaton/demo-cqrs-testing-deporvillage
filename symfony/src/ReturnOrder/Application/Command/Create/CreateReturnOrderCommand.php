<?php

declare(strict_types=1);

namespace App\ReturnOrder\Application\Command\Create;

use App\ReturnOrder\Domain\ValueObject\CustomerName;
use App\Shared\Application\Command\CommandInterface;
use App\Shared\Domain\ValueObject\Country;
use App\Shared\Domain\ValueObject\MongoId;
use App\Shared\Domain\ValueObject\Uuid;

final class CreateReturnOrderCommand implements CommandInterface
{
    private CustomerName $customerName;
    private Country $country;
    private MongoId $orderUuid;

    public function __construct(
        string $customerName,
        string $country,
        string $orderUuid
    ) {
        $this->customerName = new CustomerName($customerName);
        $this->country = new Country($country);
        $this->orderUuid = new MongoId($orderUuid);
    }

    public function customerName(): CustomerName
    {
        return $this->customerName;
    }

    public function country(): Country
    {
        return $this->country;
    }

    public function orderUuid(): MongoId
    {
        return $this->orderUuid;
    }
}
