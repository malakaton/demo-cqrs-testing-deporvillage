<?php

namespace Container0zau4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Bus_Event_Async_Middleware_AddBusNameStampMiddlewareService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.bus.event.async.middleware.add_bus_name_stamp_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/AddBusNameStampMiddleware.php';

        return $container->privates['messenger.bus.event.async.middleware.add_bus_name_stamp_middleware'] = new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('messenger.bus.event.async');
    }
}
