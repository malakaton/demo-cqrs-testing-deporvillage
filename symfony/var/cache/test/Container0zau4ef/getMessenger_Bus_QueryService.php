<?php

namespace Container0zau4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Bus_QueryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.bus.query' shared service.
     *
     * @return \Symfony\Component\Messenger\MessageBus
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/MessageBusInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/MessageBus.php';

        return $container->privates['messenger.bus.query'] = new \Symfony\Component\Messenger\MessageBus(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['messenger.bus.query.middleware.handle_message'] ?? $container->load('getMessenger_Bus_Query_Middleware_HandleMessageService'));
        }, 1));
    }
}
