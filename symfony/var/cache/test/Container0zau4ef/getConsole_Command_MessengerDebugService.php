<?php

namespace Container0zau4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerDebugService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/DebugCommand.php';

        $container->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.command' => ['App\\ReturnOrder\\Application\\Command\\Create\\CreateReturnOrderCommand' => [0 => [0 => 'App\\ReturnOrder\\Application\\Command\\Create\\CreateReturnOrderHandler', 1 => []]]], 'messenger.bus.query' => ['App\\ReturnOrder\\Application\\Query\\PickupRequest\\PickupRequestQuery' => [0 => [0 => 'App\\ReturnOrder\\Application\\Query\\PickupRequest\\PickupRequestHandler', 1 => []]]], 'messenger.bus.event.async' => []]);

        $instance->setName('debug:messenger');
        $instance->setDescription('List messages you can dispatch using the message buses');

        return $instance;
    }
}