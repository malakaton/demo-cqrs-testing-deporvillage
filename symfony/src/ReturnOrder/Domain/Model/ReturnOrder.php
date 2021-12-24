<?php

declare(strict_types=1);

namespace App\ReturnOrder\Domain\Model;

use App\ReturnOrder\Domain\Strategy\CarrierReturnCodeStrategy;
use App\ReturnOrder\Domain\ValueObject\CustomerName;
use App\ReturnOrder\Domain\ValueObject\ReturnOrderId;
use App\Shared\Domain\ValueObject\Country;
use App\Shared\Domain\ValueObject\MongoId;
use Broadway\EventSourcing\EventSourcedAggregateRoot;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Types\Type;

/**
 * @MongoDB\Document
 */
class ReturnOrder extends EventSourcedAggregateRoot
{
    /**
     * @MongoDB\Id
     */
    private ReturnOrderId $id;
    /**
     * @MongoDB\Field(type="string")
     */
    private CustomerName $customerName;
    /**
     * @MongoDB\Field(type="string")
     */
    private Country $country;
    /**
     * @MongoDB\Field(type="string")
     */
    private MongoId $orderUuid;

    private CarrierReturnCodeStrategy $carrierReturnCodeStrategy;

    public static function create(
        ReturnOrderId $id,
        CustomerName $customerName,
        Country $country,
        MongoId $orderUuid
    ): self
    {
        $returnOrder = new self;

        $returnOrder->id = $id;
        $returnOrder->customerName = $customerName;
        $returnOrder->country = $country;
        $returnOrder->orderUuid = $orderUuid;

        return $returnOrder;
    }

    public function id(): ReturnOrderId
    {
        return $this->id;
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

    public function setCarrierReturnCodeStrategy(CarrierReturnCodeStrategy $carrierReturnCodeStrategy): void
    {
        $this->carrierReturnCodeStrategy = $carrierReturnCodeStrategy;
    }

    public function getCarrierReturnCodeByCountry(): int
    {
        return $this->carrierReturnCodeStrategy->calculateReturnCode($this->country());
    }

    public function changeCountry(Country $country): void
    {
        $this->country = $country;
    }

    public function getAggregateRootId(): string
    {
        return $this->id->value();
    }
}