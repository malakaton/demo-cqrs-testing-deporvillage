<?php

namespace Container0zau4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_DefaultMetadataDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.default_metadata_driver' shared service.
     *
     * @return \Doctrine\Persistence\Mapping\Driver\MappingDriverChain
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';

        $container->privates['doctrine_mongodb.odm.default_metadata_driver'] = $instance = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $instance->addDriver(($container->privates['doctrine_mongodb.odm.default_annotation_metadata_driver'] ?? $container->load('getDoctrineMongodb_Odm_DefaultAnnotationMetadataDriverService')), 'App\\ReturnOrder\\Domain');

        return $instance;
    }
}
