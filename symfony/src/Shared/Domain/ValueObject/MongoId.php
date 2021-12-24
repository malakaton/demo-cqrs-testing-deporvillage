<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;

use InvalidArgumentException;
use MongoDB\BSON\ObjectId;

class MongoId
{
    protected ?string $value;

    public function __construct(?string $value)
    {
        is_null($value) ?: $this->ensureIsValidId($value);

        $this->value = $value;
    }

    public static function random(): self
    {
        return new static((new ObjectId())->__toString());
    }

    public function value(): ?string
    {
        return $this->value;
    }

    public function equals(MongoId $other): bool
    {
        return $this->value() === $other->value();
    }

    public function __toString(): string
    {
        return is_null($this->value()) ? '' : $this->value();
    }

    public function __toMongoObjectId(): ObjectId
    {
        return new ObjectId($this->value);
    }

    public static function fromValue(string $value): self
    {
        return new static($value);
    }

    private function ensureIsValidId($id): void
    {
        if (strlen($id) !== 24 && strspn($id,'0123456789ABCDEFabcdef') !== 24) {
            throw new InvalidArgumentException(sprintf('<%s> does not allow the value <%s>.', static::class, $id));
        }
    }
}
