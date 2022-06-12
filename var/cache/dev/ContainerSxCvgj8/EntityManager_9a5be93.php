<?php

namespace ContainerSxCvgj8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderce856 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4688c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesca26c = [
        
    ];

    public function getConnection()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getConnection', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getMetadataFactory', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getExpressionBuilder', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'beginTransaction', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getCache', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'transactional', array('func' => $func), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'commit', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->commit();
    }

    public function rollback()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'rollback', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getClassMetadata', array('className' => $className), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'createQuery', array('dql' => $dql), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'createNamedQuery', array('name' => $name), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'createQueryBuilder', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'flush', array('entity' => $entity), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'clear', array('entityName' => $entityName), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->clear($entityName);
    }

    public function close()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'close', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->close();
    }

    public function persist($entity)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'persist', array('entity' => $entity), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'remove', array('entity' => $entity), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'refresh', array('entity' => $entity), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'detach', array('entity' => $entity), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'merge', array('entity' => $entity), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'contains', array('entity' => $entity), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getEventManager', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getConfiguration', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'isOpen', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getUnitOfWork', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getProxyFactory', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'initializeObject', array('obj' => $obj), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'getFilters', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'isFiltersStateClean', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'hasFilters', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return $this->valueHolderce856->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer4688c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderce856) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderce856 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderce856->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, '__get', ['name' => $name], $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        if (isset(self::$publicPropertiesca26c[$name])) {
            return $this->valueHolderce856->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderce856;

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

        $targetObject = $this->valueHolderce856;
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
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderce856;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderce856;
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
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, '__isset', array('name' => $name), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderce856;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderce856;
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
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, '__unset', array('name' => $name), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderce856;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderce856;
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
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, '__clone', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        $this->valueHolderce856 = clone $this->valueHolderce856;
    }

    public function __sleep()
    {
        $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, '__sleep', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;

        return array('valueHolderce856');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4688c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4688c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4688c && ($this->initializer4688c->__invoke($valueHolderce856, $this, 'initializeProxy', array(), $this->initializer4688c) || 1) && $this->valueHolderce856 = $valueHolderce856;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderce856;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderce856;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
