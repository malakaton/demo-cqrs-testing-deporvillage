<?php

namespace Container7OeBJvF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBroadway_Uuid_GeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'broadway.uuid.generator' shared service.
     *
     * @return \Broadway\UuidGenerator\Rfc4122\Version4Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/broadway/uuid-generator/src/Broadway/UuidGenerator/UuidGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/broadway/uuid-generator/src/Broadway/UuidGenerator/Rfc4122/Version4Generator.php';

        return $container->services['broadway.uuid.generator'] = new \Broadway\UuidGenerator\Rfc4122\Version4Generator();
    }
}