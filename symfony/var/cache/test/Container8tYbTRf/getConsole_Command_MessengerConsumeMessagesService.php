<?php

namespace Container8tYbTRf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerConsumeMessagesService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_consume_messages' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\ConsumeMessagesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/ConsumeMessagesCommand.php';

        $container->privates['console.command.messenger_consume_messages'] = $instance = new \Symfony\Component\Messenger\Command\ConsumeMessagesCommand(($container->privates['messenger.routable_message_bus'] ?? $container->load('getMessenger_RoutableMessageBusService')), ($container->privates['messenger.receiver_locator'] ?? ($container->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []))), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), [], NULL, [0 => 'messenger.bus.command', 1 => 'messenger.bus.query', 2 => 'messenger.bus.event.async']);

        $instance->setName('messenger:consume');
        $instance->setDescription('Consume messages');

        return $instance;
    }
}
