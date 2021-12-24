<?php

namespace Container0zau4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoadDataFixturesDoctrineODMCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Doctrine\Bundle\MongoDBBundle\Command\LoadDataFixturesDoctrineODMCommand' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Command\LoadDataFixturesDoctrineODMCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Command/DoctrineODMCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Command/LoadDataFixturesDoctrineODMCommand.php';

        $container->privates['Doctrine\\Bundle\\MongoDBBundle\\Command\\LoadDataFixturesDoctrineODMCommand'] = $instance = new \Doctrine\Bundle\MongoDBBundle\Command\LoadDataFixturesDoctrineODMCommand(($container->services['doctrine_mongodb'] ?? $container->load('getDoctrineMongodbService')), ($container->services['kernel'] ?? $container->get('kernel', 2)), ($container->privates['doctrine_mongodb.odm.symfony.fixtures.loader'] ?? $container->load('getDoctrineMongodb_Odm_Symfony_Fixtures_LoaderService')));

        $instance->setName('doctrine:mongodb:fixtures:load');

        return $instance;
    }
}