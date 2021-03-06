<?php

namespace Container8tYbTRf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateReturnOrderControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\ReturnOrder\Infrastructure\Http\Controller\CreateReturnOrderController' shared autowired service.
     *
     * @return \App\ReturnOrder\Infrastructure\Http\Controller\CreateReturnOrderController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Shared/Infrastructure/Http/Controller/CommandController.php';
        include_once \dirname(__DIR__, 4).'/src/ReturnOrder/Infrastructure/Http/Controller/CreateReturnOrderController.php';

        return $container->services['App\\ReturnOrder\\Infrastructure\\Http\\Controller\\CreateReturnOrderController'] = new \App\ReturnOrder\Infrastructure\Http\Controller\CreateReturnOrderController(($container->privates['App\\Shared\\Infrastructure\\Bus\\Command\\MessengerCommandBus'] ?? $container->load('getMessengerCommandBusService')));
    }
}
