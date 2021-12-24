<?php

namespace Symfony\Config\Broadway;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class CommandHandlingConfig 
{
    private $dispatchEvents;
    private $logger;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function dispatchEvents($value): self
    {
        $this->dispatchEvents = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logger($value): self
    {
        $this->logger = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['dispatch_events'])) {
            $this->dispatchEvents = $value['dispatch_events'];
            unset($value['dispatch_events']);
        }
    
        if (isset($value['logger'])) {
            $this->logger = $value['logger'];
            unset($value['logger']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->dispatchEvents) {
            $output['dispatch_events'] = $this->dispatchEvents;
        }
        if (null !== $this->logger) {
            $output['logger'] = $this->logger;
        }
    
        return $output;
    }

}
