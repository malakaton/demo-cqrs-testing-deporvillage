<?php

namespace Container0zau4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_DefaultManagerConfiguratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\ManagerConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/ManagerConfigurator.php';

        return $container->privates['doctrine_mongodb.odm.default_manager_configurator'] = new \Doctrine\Bundle\MongoDBBundle\ManagerConfigurator([]);
    }
}