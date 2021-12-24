<?php

declare(strict_types=1);

namespace App\ReturnOrder\Domain\Repository;

use App\ReturnOrder\Domain\Model\ReturnOrder;
use App\ReturnOrder\Domain\ValueObject\ReturnOrderId;

interface ReturnOrderRepository
{
    public function save(ReturnOrder $returnOrder): void;
    public function getById(ReturnOrderId $returnOrderId): ReturnOrder;
}
