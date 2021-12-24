<?php

namespace Container7OeBJvF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBroadway_MetadataEnricher_ConsoleService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'broadway.metadata_enricher.console' shared service.
     *
     * @return \Broadway\Bundle\BroadwayBundle\Command\CommandMetadataEnricher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/broadway/broadway/src/Broadway/EventSourcing/MetadataEnrichment/MetadataEnricher.php';
        include_once \dirname(__DIR__, 4).'/vendor/broadway/broadway-bundle/src/Command/CommandMetadataEnricher.php';

        return $container->privates['broadway.metadata_enricher.console'] = new \Broadway\Bundle\BroadwayBundle\Command\CommandMetadataEnricher();
    }
}
