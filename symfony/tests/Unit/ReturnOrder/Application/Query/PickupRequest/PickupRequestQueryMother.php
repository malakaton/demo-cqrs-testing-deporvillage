<?php

declare(strict_types=1);

namespace App\Tests\Unit\ReturnOrder\Application\Query\PickupRequest;

use App\ReturnOrder\Application\Query\PickupRequest\PickupRequestQuery;

final class PickupRequestQueryMother
{
    public static function create(
        string $id
    ): PickupRequestQuery
    {
        return new PickupRequestQuery(
            $id
        );
    }
}
