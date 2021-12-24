<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Http\Controller;

use App\Shared\Application\Query\Item;
use App\Shared\Application\Query\QueryBusInterface;
use App\Shared\Application\Query\QueryInterface;
use App\Shared\Infrastructure\Http\Response\OpenApi;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

abstract class QueryController
{
    private QueryBusInterface $queryBus;

    private UrlGeneratorInterface $router;

    public function __construct(QueryBusInterface $queryBus, UrlGeneratorInterface $router)
    {
        $this->queryBus = $queryBus;
        $this->router = $router;
    }

    /**
     * @param QueryInterface $query
     * @return Item|string|null
     *
     */
    protected function ask(QueryInterface $query)
    {
        return $this->queryBus->ask($query);
    }

    /**
     * @param Item $resource
     * @param int $status
     * @return OpenApi
     */
    protected function json(Item $resource, int $status = OpenApi::HTTP_OK): OpenApi
    {
        return OpenApi::one($resource, $status);
    }

    /**
     * @param string $name
     * @param array $params
     * @return string
     */
    protected function route(string $name, array $params = []): string
    {
        return $this->router->generate($name, $params);
    }
}
