<?php

namespace Container0zau4ef;
include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerInterface.php';

class ContainerInterface_7a5418d implements \ProxyManager\Proxy\VirtualProxyInterface, \Symfony\Component\DependencyInjection\ContainerInterface
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder078e1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8151 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58d3e = [
        
    ];

    public function set(string $id, ?object $service)
    {
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, 'set', array('id' => $id, 'service' => $service), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        return $this->valueHolder078e1->set($id, $service);
    }

    public function get(string $id, int $invalidBehavior = 1)
    {
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, 'get', array('id' => $id, 'invalidBehavior' => $invalidBehavior), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        return $this->valueHolder078e1->get($id, $invalidBehavior);
    }

    public function has(string $id)
    {
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, 'has', array('id' => $id), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        return $this->valueHolder078e1->has($id);
    }

    public function initialized(string $id)
    {
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, 'initialized', array('id' => $id), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        return $this->valueHolder078e1->initialized($id);
    }

    public function getParameter(string $name)
    {
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, 'getParameter', array('name' => $name), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        return $this->valueHolder078e1->getParameter($name);
    }

    public function hasParameter(string $name)
    {
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, 'hasParameter', array('name' => $name), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        return $this->valueHolder078e1->hasParameter($name);
    }

    public function setParameter(string $name, $value)
    {
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, 'setParameter', array('name' => $name, 'value' => $value), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        return $this->valueHolder078e1->setParameter($name, $value);
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

        $instance->initializera8151 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder078e1) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');
            $this->valueHolder078e1 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, '__get', ['name' => $name], $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        if (isset(self::$publicProperties58d3e[$name])) {
            return $this->valueHolder078e1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder078e1;

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

        $targetObject = $this->valueHolder078e1;
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
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder078e1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder078e1;
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
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, '__isset', array('name' => $name), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder078e1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder078e1;
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
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, '__unset', array('name' => $name), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder078e1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder078e1;
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
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, '__clone', array(), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        $this->valueHolder078e1 = clone $this->valueHolder078e1;
    }

    public function __sleep()
    {
        $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, '__sleep', array(), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;

        return array('valueHolder078e1');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8151 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8151;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8151 && ($this->initializera8151->__invoke($valueHolder078e1, $this, 'initializeProxy', array(), $this->initializera8151) || 1) && $this->valueHolder078e1 = $valueHolder078e1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder078e1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder078e1;
    }
}

if (!\class_exists('ContainerInterface_7a5418d', false)) {
    \class_alias(__NAMESPACE__.'\\ContainerInterface_7a5418d', 'ContainerInterface_7a5418d', false);
}
