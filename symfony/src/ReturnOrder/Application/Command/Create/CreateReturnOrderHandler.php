<?php

declare(strict_types=1);

namespace App\ReturnOrder\Application\Command\Create;

use App\ReturnOrder\Domain\ValueObject\ReturnOrderId;
use App\ReturnOrder\Domain\Model\ReturnOrder;
use App\ReturnOrder\Domain\Repository\ReturnOrderRepository;
use App\Shared\Application\Command\CommandHandlerInterface;
use Throwable;

final class CreateReturnOrderHandler implements CommandHandlerInterface
{
    private ReturnOrderRepository $returnOrderRepository;

    public function __construct(
        ReturnOrderRepository $returnOrderRepository
    ) {
        $this->returnOrderRepository = $returnOrderRepository;
    }

    public function __invoke(CreateReturnOrderCommand $command): ReturnOrderId
    {
        $returnOrder = ReturnOrder::create(
            ReturnOrderId::random(),
            $command->customerName(),
            $command->country(),
            $command->orderUuid()
        );

        $this->returnOrderRepository->save($returnOrder);

        return $returnOrder->id();
    }
}
