<?php

declare(strict_types=1);

namespace App\ReturnOrder\Application\Query\PickupRequest;

use App\ReturnOrder\Domain\Strategy\CarrierReturnCodeStrategy;
use App\ReturnOrder\Domain\Repository\ReturnOrderRepository;
use App\Shared\Application\Query\Item;
use App\Shared\Application\Query\QueryHandlerInterface;

final class PickupRequestHandler implements QueryHandlerInterface
{
    private ReturnOrderRepository $returnOrderRepository;
    private CarrierReturnCodeStrategy $carrierReturnCodeStrategy;

    public function __construct(
        ReturnOrderRepository $returnOrderRepository,
        CarrierReturnCodeStrategy $carrierReturnCodeStrategy
    ) {
        $this->returnOrderRepository = $returnOrderRepository;
        $this->carrierReturnCodeStrategy = $carrierReturnCodeStrategy;
    }

    public function __invoke(PickupRequestQuery $query): Item
    {
        $returnOrder = $this->returnOrderRepository->getById($query->returnOrderId());

        $returnOrder->setCarrierReturnCodeStrategy($this->carrierReturnCodeStrategy);

        return Item::fromPayload(
            $returnOrder->id()->value(),
            'carrierReturnCode',
            [
                'carrier_pickup_code' => $returnOrder->getCarrierReturnCodeByCountry()
            ]
        );
    }
}
