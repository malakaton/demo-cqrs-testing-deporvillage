<?php

namespace Symfony\Config\DoctrineMongodb;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ConnectionConfig'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConnectionConfig'.\DIRECTORY_SEPARATOR.'DriverOptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ConnectionConfig 
{
    private $server;
    private $options;
    private $driverOptions;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function server($value): self
    {
        $this->server = $value;
    
        return $this;
    }
    
    public function options(array $value = []): \Symfony\Config\DoctrineMongodb\ConnectionConfig\OptionsConfig
    {
        if (null === $this->options) {
            $this->options = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\OptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }
    
        return $this->options;
    }
    
    public function driverOptions(array $value = []): \Symfony\Config\DoctrineMongodb\ConnectionConfig\DriverOptionsConfig
    {
        if (null === $this->driverOptions) {
            $this->driverOptions = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\DriverOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "driverOptions()" has already been initialized. You cannot pass values the second time you call driverOptions().');
        }
    
        return $this->driverOptions;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['server'])) {
            $this->server = $value['server'];
            unset($value['server']);
        }
    
        if (isset($value['options'])) {
            $this->options = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\OptionsConfig($value['options']);
            unset($value['options']);
        }
    
        if (isset($value['driver_options'])) {
            $this->driverOptions = new \Symfony\Config\DoctrineMongodb\ConnectionConfig\DriverOptionsConfig($value['driver_options']);
            unset($value['driver_options']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->server) {
            $output['server'] = $this->server;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options->toArray();
        }
        if (null !== $this->driverOptions) {
            $output['driver_options'] = $this->driverOptions->toArray();
        }
    
        return $output;
    }

}
