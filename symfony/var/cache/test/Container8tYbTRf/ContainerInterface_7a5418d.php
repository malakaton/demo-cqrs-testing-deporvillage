<?php

namespace Container8tYbTRf;
include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerInterface.php';

class ContainerInterface_7a5418d implements \ProxyManager\Proxy\VirtualProxyInterface, \Symfony\Component\DependencyInjection\ContainerInterface
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder66254 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera68e3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1949c = [
        
    ];

    public function set(string $id, ?object $service)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, 'set', array('id' => $id, 'service' => $service), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        return $this->valueHolder66254->set($id, $service);
    }

    public function get(string $id, int $invalidBehavior = 1)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, 'get', array('id' => $id, 'invalidBehavior' => $invalidBehavior), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        return $this->valueHolder66254->get($id, $invalidBehavior);
    }

    public function has(string $id)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, 'has', array('id' => $id), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        return $this->valueHolder66254->has($id);
    }

    public function initialized(string $id)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, 'initialized', array('id' => $id), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        return $this->valueHolder66254->initialized($id);
    }

    public function getParameter(string $name)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, 'getParameter', array('name' => $name), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        return $this->valueHolder66254->getParameter($name);
    }

    public function hasParameter(string $name)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, 'hasParameter', array('name' => $name), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        return $this->valueHolder66254->hasParameter($name);
    }

    public function setParameter(string $name, $value)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, 'setParameter', array('name' => $name, 'value' => $value), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        return $this->valueHolder66254->setParameter($name, $value);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializera68e3 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder66254) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');
            $this->valueHolder66254 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, '__get', ['name' => $name], $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        if (isset(self::$publicProperties1949c[$name])) {
            return $this->valueHolder66254->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66254;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder66254;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66254;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder66254;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, '__isset', array('name' => $name), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66254;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder66254;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, '__unset', array('name' => $name), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66254;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder66254;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, '__clone', array(), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        $this->valueHolder66254 = clone $this->valueHolder66254;
    }

    public function __sleep()
    {
        $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, '__sleep', array(), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;

        return array('valueHolder66254');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera68e3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera68e3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera68e3 && ($this->initializera68e3->__invoke($valueHolder66254, $this, 'initializeProxy', array(), $this->initializera68e3) || 1) && $this->valueHolder66254 = $valueHolder66254;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder66254;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder66254;
    }
}

if (!\class_exists('ContainerInterface_7a5418d', false)) {
    \class_alias(__NAMESPACE__.'\\ContainerInterface_7a5418d', 'ContainerInterface_7a5418d', false);
}
