<?php

namespace Container8tYbTRf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_Symfony_Fixtures_LoaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.symfony.fixtures.loader' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Loader\SymfonyFixturesLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataFixtures/ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Loader/SymfonyFixturesLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Loader/SymfonyFixturesLoader.php';

        $container->privates['doctrine_mongodb.odm.symfony.fixtures.loader'] = $instance = new \Doctrine\Bundle\MongoDBBundle\Loader\SymfonyFixturesLoader($container);

        $instance->addFixtures([]);

        return $instance;
    }
}
