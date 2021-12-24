<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Broadway'.\DIRECTORY_SEPARATOR.'CommandHandlingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Broadway'.\DIRECTORY_SEPARATOR.'SagaConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Broadway'.\DIRECTORY_SEPARATOR.'SerializerConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class BroadwayConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $commandHandling;
    private $eventStore;
    private $saga;
    private $serializer;
    private $readModel;
    
    public function commandHandling(array $value = []): \Symfony\Config\Broadway\CommandHandlingConfig
    {
        if (null === $this->commandHandling) {
            $this->commandHandling = new \Symfony\Config\Broadway\CommandHandlingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "commandHandling()" has already been initialized. You cannot pass values the second time you call commandHandling().');
        }
    
        return $this->commandHandling;
    }
    
    /**
     * a service definition id implementing Broadway\EventStore\EventStore
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function eventStore($value): self
    {
        $this->eventStore = $value;
    
        return $this;
    }
    
    public function saga(array $value = []): \Symfony\Config\Broadway\SagaConfig
    {
        if (null === $this->saga) {
            $this->saga = new \Symfony\Config\Broadway\SagaConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "saga()" has already been initialized. You cannot pass values the second time you call saga().');
        }
    
        return $this->saga;
    }
    
    public function serializer(array $value = []): \Symfony\Config\Broadway\SerializerConfig
    {
        if (null === $this->serializer) {
            $this->serializer = new \Symfony\Config\Broadway\SerializerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "serializer()" has already been initialized. You cannot pass values the second time you call serializer().');
        }
    
        return $this->serializer;
    }
    
    /**
     * a service definition id implementing Broadway\ReadModel\RepositoryFactory
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function readModel($value): self
    {
        $this->readModel = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'broadway';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['command_handling'])) {
            $this->commandHandling = new \Symfony\Config\Broadway\CommandHandlingConfig($value['command_handling']);
            unset($value['command_handling']);
        }
    
        if (isset($value['event_store'])) {
            $this->eventStore = $value['event_store'];
            unset($value['event_store']);
        }
    
        if (isset($value['saga'])) {
            $this->saga = new \Symfony\Config\Broadway\SagaConfig($value['saga']);
            unset($value['saga']);
        }
    
        if (isset($value['serializer'])) {
            $this->serializer = new \Symfony\Config\Broadway\SerializerConfig($value['serializer']);
            unset($value['serializer']);
        }
    
        if (isset($value['read_model'])) {
            $this->readModel = $value['read_model'];
            unset($value['read_model']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->commandHandling) {
            $output['command_handling'] = $this->commandHandling->toArray();
        }
        if (null !== $this->eventStore) {
            $output['event_store'] = $this->eventStore;
        }
        if (null !== $this->saga) {
            $output['saga'] = $this->saga->toArray();
        }
        if (null !== $this->serializer) {
            $output['serializer'] = $this->serializer->toArray();
        }
        if (null !== $this->readModel) {
            $output['read_model'] = $this->readModel;
        }
    
        return $output;
    }

}
