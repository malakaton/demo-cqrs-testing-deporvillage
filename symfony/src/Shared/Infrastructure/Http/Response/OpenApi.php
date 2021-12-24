<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Http\Response;

use App\Shared\Application\Query\Item;
use Symfony\Component\HttpFoundation\JsonResponse;

class OpenApi extends JsonResponse
{
    private function __construct($data = null, int $status = self::HTTP_OK, array $headers = [], bool $json = false)
    {
        parent::__construct($data, $status, $headers, $json);
    }

    public static function fromPayload(array $payload, int $status): self
    {
        return new self($payload, $status);
    }

    public static function empty(int $status): self
    {
        return new self(null, $status);
    }

    public static function one(Item $resource, int $status = self::HTTP_OK): self
    {
        return new self(self::model($resource), $status);
    }

    public static function created(string $data, string $location = null): self
    {
        return new self(
            $data,
            self::HTTP_CREATED,
            ($location) ? ['location' => $location] : []
        );
    }

    private static function model(Item $resource): array
    {
        return $resource->resource;
    }
}
