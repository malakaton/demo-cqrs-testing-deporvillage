<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Bus\Command;

use App\Shared\Application\Command\CommandBusInterface;
use App\Shared\Application\Command\CommandInterface;
use App\Shared\Infrastructure\Bus\MessageBusExceptionTrait;
use Symfony\Component\Messenger\Exception\HandlerFailedException;
use Symfony\Component\Messenger\Exception\LogicException;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;
use Throwable;

final class MessengerCommandBus implements CommandBusInterface
{
    use MessageBusExceptionTrait;

    private MessageBusInterface $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    /**
     * @param CommandInterface $command
     * @return mixed
     * @throws Throwable
     */
    public function handle(CommandInterface $command)
    {
        $handledStamps = null;

        try {
            $envelope = $this->messageBus->dispatch($command);

            /** @var HandledStamp[] $handledStamps */
            $handledStamps = $envelope->all(HandledStamp::class);

            if (!$handledStamps) {
                throw new LogicException(sprintf('Message of type "%s" was handled zero times. Exactly one handler is expected when using "%s::%s()".', get_debug_type($envelope->getMessage()), static::class, __FUNCTION__));
            }

            if (\count($handledStamps) > 1) {
                $handlers = implode(', ', array_map(function (HandledStamp $stamp): string {
                    return sprintf('"%s"', $stamp->getHandlerName());
                }, $handledStamps));

                throw new LogicException(sprintf('Message of type "%s" was handled multiple times. Only one handler is expected when using "%s::%s()", got %d: %s.', get_debug_type($envelope->getMessage()), static::class, __FUNCTION__, \count($handledStamps), $handlers));
            }
        } catch (HandlerFailedException $e) {
            $this->throwException($e);
        }

        return $handledStamps[0]->getResult();
    }
}
