<?php

namespace Symfony\Config\Broadway;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SagaConfig 
{
    private $enabled;
    private $stateRepository;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * a service definition id implementing Broadway\Saga\State\RepositoryInterface
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function stateRepository($value): self
    {
        $this->stateRepository = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['state_repository'])) {
            $this->stateRepository = $value['state_repository'];
            unset($value['state_repository']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->stateRepository) {
            $output['state_repository'] = $this->stateRepository;
        }
    
        return $output;
    }

}
