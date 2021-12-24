<?php

namespace MongoDBODMProxies\__PM__\App\ReturnOrder\Domain\Model\ReturnOrder;

class Generated85f037ceae6cce686b07dccdfe717e7a extends \App\ReturnOrder\Domain\Model\ReturnOrder implements \ProxyManager\Proxy\GhostObjectInterface
{
    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera68e3 = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker9449e = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1949c = [
        
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privateProperties5369d = [
        'customerName' => [
            'App\\ReturnOrder\\Domain\\Model\\ReturnOrder' => true,
        ],
        'country' => [
            'App\\ReturnOrder\\Domain\\Model\\ReturnOrder' => true,
        ],
        'orderUuid' => [
            'App\\ReturnOrder\\Domain\\Model\\ReturnOrder' => true,
        ],
        'carrierReturnCodeStrategy' => [
            'App\\ReturnOrder\\Domain\\Model\\ReturnOrder' => true,
        ],
        'uncommittedEvents' => [
            'Broadway\\EventSourcing\\EventSourcedAggregateRoot' => true,
        ],
        'playhead' => [
            'Broadway\\EventSourcing\\EventSourcedAggregateRoot' => true,
        ],
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedPropertiesc5987 = [
        
    ];

    private static $signature85f037ceae6cce686b07dccdfe717e7a = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czo0MDoiQXBwXFJldHVybk9yZGVyXERvbWFpblxNb2RlbFxSZXR1cm5PcmRlciI7czo3OiJmYWN0b3J5IjtzOjQ0OiJQcm94eU1hbmFnZXJcRmFjdG9yeVxMYXp5TG9hZGluZ0dob3N0RmFjdG9yeSI7czoxOToicHJveHlNYW5hZ2VyVmVyc2lvbiI7czo0NzoidjEuMC41QDAwNmFhNWQzMmY4ODdhNGRiNDM1M2IxM2I1YjUwOTU2MTNlMDYxMWYiO3M6MTI6InByb3h5T3B0aW9ucyI7YToxOntzOjE3OiJza2lwcGVkUHJvcGVydGllcyI7YToxOntpOjA7czo0NDoiAEFwcFxSZXR1cm5PcmRlclxEb21haW5cTW9kZWxcUmV0dXJuT3JkZXIAaWQiO319fQ==';

    /**
     * Triggers initialization logic for this ghost object
     *
     * @param string  $methodName
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    private function callInitializerea3f9($methodName, array $parameters)
    {
        if ($this->initializationTracker9449e || ! $this->initializera68e3) {
            return;
        }

        $this->initializationTracker9449e = true;

        static $cacheBroadway_EventSourcing_EventSourcedAggregateRoot;

        $cacheBroadway_EventSourcing_EventSourcedAggregateRoot ?? $cacheBroadway_EventSourcing_EventSourcedAggregateRoot = \Closure::bind(static function ($instance) {
            $instance->uncommittedEvents = array (
        );
            $instance->playhead = -1;
        }, null, 'Broadway\\EventSourcing\\EventSourcedAggregateRoot');

        $cacheBroadway_EventSourcing_EventSourcedAggregateRoot($this);




        $properties = [

        ];

        static $cacheFetchBroadway_EventSourcing_EventSourcedAggregateRoot;

        $cacheFetchBroadway_EventSourcing_EventSourcedAggregateRoot ?? $cacheFetchBroadway_EventSourcing_EventSourcedAggregateRoot = \Closure::bind(function ($instance, array & $properties) {
            $properties['' . "\0" . 'Broadway\\EventSourcing\\EventSourcedAggregateRoot' . "\0" . 'uncommittedEvents'] = & $instance->uncommittedEvents;
            $properties['' . "\0" . 'Broadway\\EventSourcing\\EventSourcedAggregateRoot' . "\0" . 'playhead'] = & $instance->playhead;
        }, $this, 'Broadway\\EventSourcing\\EventSourcedAggregateRoot');

        $cacheFetchBroadway_EventSourcing_EventSourcedAggregateRoot($this, $properties);

        $result = $this->initializera68e3->__invoke($this, $methodName, $parameters, $this->initializera68e3, $properties);
        $this->initializationTracker9449e = false;

        return $result;
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

        \Closure::bind(function (\App\ReturnOrder\Domain\Model\ReturnOrder $instance) {
            unset($instance->customerName, $instance->country, $instance->orderUuid, $instance->carrierReturnCodeStrategy);
        }, $instance, 'App\\ReturnOrder\\Domain\\Model\\ReturnOrder')->__invoke($instance);

        \Closure::bind(function (\Broadway\EventSourcing\EventSourcedAggregateRoot $instance) {
            unset($instance->uncommittedEvents, $instance->playhead);
        }, $instance, 'Broadway\\EventSourcing\\EventSourcedAggregateRoot')->__invoke($instance);

        $instance->initializera68e3 = $initializer;

        return $instance;
    }

    public function & __get($name)
    {
        $this->initializera68e3 && ! $this->initializationTracker9449e && $this->callInitializerea3f9('__get', array('name' => $name));

        if (isset(self::$publicProperties1949c[$name])) {
            return $this->$name;
        }

        if (isset(self::$protectedPropertiesc5987[$name])) {
            if ($this->initializationTracker9449e) {
                return $this->$name;
            }

            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesc5987[$name];

            if ($object instanceof $expectedType) {
                return $this->$name;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privateProperties5369d[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties5369d[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);

                return $accessor($this);
            }

            if ($this->initializationTracker9449e || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5369d[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

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

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializera68e3 && $this->callInitializerea3f9('__set', array('name' => $name, 'value' => $value));

        if (isset(self::$publicProperties1949c[$name])) {
            return ($this->$name = $value);
        }

        if (isset(self::$protectedPropertiesc5987[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesc5987[$name];

            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privateProperties5369d[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties5369d[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);

                return $accessor($this, $value);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5369d[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $tmpClass);

                return $accessor($this, $value);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializera68e3 && $this->callInitializerea3f9('__isset', array('name' => $name));

        if (isset(self::$publicProperties1949c[$name])) {
            return isset($this->$name);
        }

        if (isset(self::$protectedPropertiesc5987[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesc5987[$name];

            if ($object instanceof $expectedType) {
                return isset($this->$name);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType)) {
                return isset($this->$name);
            }
        } else {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties5369d[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5369d[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializera68e3 && $this->callInitializerea3f9('__unset', array('name' => $name));

        if (isset(self::$publicProperties1949c[$name])) {
            unset($this->$name);

            return;
        }

        if (isset(self::$protectedPropertiesc5987[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesc5987[$name];

            if ($object instanceof $expectedType) {
                unset($this->$name);

                return;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);

                return;
            }
        } elseif (isset(self::$privateProperties5369d[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties5369d[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties5369d[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializera68e3 && $this->callInitializerea3f9('__clone', []);
    }

    public function __sleep()
    {
        $this->initializera68e3 && $this->callInitializerea3f9('__sleep', []);

        return array_keys((array) $this);
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
        return $this->initializera68e3 && $this->callInitializerea3f9('initializeProxy', []);
    }

    public function isProxyInitialized() : bool
    {
        return ! $this->initializera68e3;
    }
}
