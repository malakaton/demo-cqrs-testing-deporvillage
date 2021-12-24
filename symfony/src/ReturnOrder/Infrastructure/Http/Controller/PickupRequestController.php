<?php

declare(strict_types=1);

namespace App\ReturnOrder\Infrastructure\Http\Controller;

use App\ReturnOrder\Application\Query\PickupRequest\PickupRequestQuery;
use App\Shared\Application\Query\Item;
use App\Shared\Infrastructure\Http\Controller\QueryController;
use Assert\Assertion;
use Assert\AssertionFailedException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class PickupRequestController extends QueryController
{
    /**
     * @Route("/return-order/{uuid}/pickup", methods={"GET"})
     * @param string $uuid
     * @return JsonResponse
     * @throws AssertionFailedException
     */
    public function __invoke(string $uuid): JsonResponse
    {
        Assertion::string($uuid, "Order id can\'t be empty or invalid");

        $command = new PickupRequestQuery($uuid);

        /** @var Item $pickup */
        $pickup = $this->ask($command);

        return $this->json($pickup);
    }
}
