<?php

declare(strict_types=1);

namespace App\ReturnOrder\Application\Query\PickupRequest;

use App\ReturnOrder\Domain\ValueObject\ReturnOrderId;
use App\Shared\Application\Query\QueryInterface;

final class PickupRequestQuery implements QueryInterface
{
    private ReturnOrderId $returnOrderId;

    public function __construct(
        string $returnOrderId
    ) {
        $this->returnOrderId = new ReturnOrderId($returnOrderId);
    }

    public function returnOrderId(): ReturnOrderId
    {
        return $this->returnOrderId;
    }
}
