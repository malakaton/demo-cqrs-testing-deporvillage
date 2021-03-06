<?php

namespace Container7OeBJvF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBroadway_Uuid_ConverterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'broadway.uuid.converter' shared service.
     *
     * @return \Broadway\UuidGenerator\Converter\BinaryUuidConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/broadway/uuid-generator/src/Broadway/UuidGenerator/Converter/BinaryUuidConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/broadway/uuid-generator/src/Broadway/UuidGenerator/Converter/BinaryUuidConverter.php';

        return $container->privates['broadway.uuid.converter'] = new \Broadway\UuidGenerator\Converter\BinaryUuidConverter();
    }
}
