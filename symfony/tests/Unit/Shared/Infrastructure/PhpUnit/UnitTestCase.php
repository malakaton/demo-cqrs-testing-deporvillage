<?php

declare(strict_types=1);

namespace App\Tests\Unit\Shared\Infrastructure\PhpUnit;

use App\Shared\Application\Command\CommandInterface;
use App\Shared\Application\Query\QueryInterface;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use Mockery\MockInterface;

abstract class UnitTestCase extends MockeryTestCase
{
    public const LOGGER_TEST_NAME = 'test';

    protected function mock(string $className): MockInterface
    {
        return Mockery::mock($className);
    }

    protected function dispatch(CommandInterface $command, callable $commandHandler)
    {
        return $commandHandler($command);
    }

    protected function dispatchQuery(QueryInterface $command, callable $commandHandler)
    {
        return $commandHandler($command);
    }
}
