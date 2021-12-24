<?php

namespace Container7OeBJvF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPickupRequestHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\ReturnOrder\Application\Query\PickupRequest\PickupRequestHandler' shared autowired service.
     *
     * @return \App\ReturnOrder\Application\Query\PickupRequest\PickupRequestHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Shared/Application/Query/QueryHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/ReturnOrder/Application/Query/PickupRequest/PickupRequestHandler.php';
        include_once \dirname(__DIR__, 4).'/src/ReturnOrder/Domain/Strategy/CarrierReturnCodeStrategy.php';

        return $container->services['App\\ReturnOrder\\Application\\Query\\PickupRequest\\PickupRequestHandler'] = new \App\ReturnOrder\Application\Query\PickupRequest\PickupRequestHandler(($container->privates['App\\ReturnOrder\\Infrastructure\\Persistence\\Repository\\MongoReturnOrderRepository'] ?? $container->load('getMongoReturnOrderRepositoryService')), ($container->privates['App\\ReturnOrder\\Domain\\Strategy\\CarrierReturnCodeStrategy'] ?? ($container->privates['App\\ReturnOrder\\Domain\\Strategy\\CarrierReturnCodeStrategy'] = new \App\ReturnOrder\Domain\Strategy\CarrierReturnCodeStrategy())));
    }
}