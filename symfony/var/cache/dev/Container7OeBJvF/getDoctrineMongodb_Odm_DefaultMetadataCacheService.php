<?php

namespace Container7OeBJvF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_DefaultMetadataCacheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.default_metadata_cache' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';

        return $container->privates['doctrine_mongodb.odm.default_metadata_cache'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }
}
