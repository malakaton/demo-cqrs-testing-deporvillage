<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Http\Controller;

use App\Shared\Application\Command\CommandBusInterface;
use App\Shared\Application\Command\CommandInterface;

abstract class CommandController
{
    private CommandBusInterface $commandBus;

    public function __construct(CommandBusInterface $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @param CommandInterface $command
     *
     * @return mixed
     */
    protected function handle(CommandInterface $command)
    {
        return $this->commandBus->handle($command);
    }
}
