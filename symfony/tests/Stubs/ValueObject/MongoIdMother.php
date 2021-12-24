<?php

declare(strict_types=1);

namespace App\Tests\Stubs\ValueObject;

use App\Shared\Domain\ValueObject\MongoId;
use MongoDB\BSON\ObjectId;

final class MongoIdMother
{
    public static function random(): MongoId
    {
        return MongoId::fromValue(
            (new ObjectId())->__toString()
        );
    }
}
