<?php

namespace Container8tYbTRf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_PsrCommandLoggerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine_mongodb.odm.psr_command_logger' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/APM/CommandLoggerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/APM/PSRCommandLogger.php';

        return $container->privates['doctrine_mongodb.odm.psr_command_logger'] = new \Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }
}
