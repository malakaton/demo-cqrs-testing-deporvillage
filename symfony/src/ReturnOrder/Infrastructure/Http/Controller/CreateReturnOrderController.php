<?php

declare(strict_types=1);

namespace App\ReturnOrder\Infrastructure\Http\Controller;

use App\ReturnOrder\Application\Command\Create\CreateReturnOrderCommand;
use App\ReturnOrder\Domain\ValueObject\ReturnOrderId;
use App\Shared\Infrastructure\Http\Controller\CommandController;
use App\Shared\Infrastructure\Http\Response\OpenApi;
use App\Shared\Infrastructure\Symfony\Exception\SymfonyException;
use JsonException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Throwable;

final class CreateReturnOrderController extends CommandController
{
    /**
     * @Route("/return-order", methods={"POST"})
     * @param Request $request
     * @return OpenApi
     * @throws JsonException
     * @throws SymfonyException
     * @throws Throwable
     */
    public function __invoke(Request $request): OpenApi
    {
        $requestToArray = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);

        $uuid = $this->createReturnOrder($requestToArray);

        return OpenApi::created($uuid->value(),"/return-order/$uuid");
    }

    /**
     * @param array $input
     * @return ReturnOrderId
     * @throws Throwable
     */
    private function createReturnOrder(array $input): ReturnOrderId
    {
        $commandRequest = new CreateReturnOrderCommand(
            $input['customer_name'] ?? null,
            $input['country'] ?? null,
            $input['order_uuid'] ?? null
        );

        return $this->handle($commandRequest);
    }
}
