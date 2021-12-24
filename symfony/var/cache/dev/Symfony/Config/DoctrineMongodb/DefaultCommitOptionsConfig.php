<?php

namespace Symfony\Config\DoctrineMongodb;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class DefaultCommitOptionsConfig 
{
    private $j;
    private $timeout;
    private $w;
    private $wtimeout;
    private $fsync;
    private $safe;
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function j($value): self
    {
        $this->j = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function timeout($value): self
    {
        $this->timeout = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function w($value): self
    {
        $this->w = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function wtimeout($value): self
    {
        $this->wtimeout = $value;
    
        return $this;
    }
    
    /**
     * Deprecated. Please use the "j" option instead.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function fsync($value): self
    {
        $this->fsync = $value;
    
        return $this;
    }
    
    /**
     * Deprecated. Please use the "w" option instead.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function safe($value): self
    {
        $this->safe = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['j'])) {
            $this->j = $value['j'];
            unset($value['j']);
        }
    
        if (isset($value['timeout'])) {
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }
    
        if (isset($value['w'])) {
            $this->w = $value['w'];
            unset($value['w']);
        }
    
        if (isset($value['wtimeout'])) {
            $this->wtimeout = $value['wtimeout'];
            unset($value['wtimeout']);
        }
    
        if (isset($value['fsync'])) {
            $this->fsync = $value['fsync'];
            unset($value['fsync']);
        }
    
        if (isset($value['safe'])) {
            $this->safe = $value['safe'];
            unset($value['safe']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->j) {
            $output['j'] = $this->j;
        }
        if (null !== $this->timeout) {
            $output['timeout'] = $this->timeout;
        }
        if (null !== $this->w) {
            $output['w'] = $this->w;
        }
        if (null !== $this->wtimeout) {
            $output['wtimeout'] = $this->wtimeout;
        }
        if (null !== $this->fsync) {
            $output['fsync'] = $this->fsync;
        }
        if (null !== $this->safe) {
            $output['safe'] = $this->safe;
        }
    
        return $output;
    }

}
