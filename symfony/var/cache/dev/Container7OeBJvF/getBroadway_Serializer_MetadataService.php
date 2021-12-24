<?php

namespace Container7OeBJvF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBroadway_Serializer_MetadataService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'broadway.serializer.metadata' shared service.
     *
     * @return \Broadway\Serializer\SimpleInterfaceSerializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/broadway/broadway/src/Broadway/Serializer/Serializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/broadway/broadway/src/Broadway/Serializer/SimpleInterfaceSerializer.php';

        return $container->services['broadway.serializer.metadata'] = new \Broadway\Serializer\SimpleInterfaceSerializer();
    }
}
