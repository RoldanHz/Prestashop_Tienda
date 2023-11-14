<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder71400 = null;
    private $initializera159d = null;
    private static $publicPropertieseb381 = [
        
    ];
    public function getConnection()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getConnection', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getMetadataFactory', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getExpressionBuilder', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'beginTransaction', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getCache', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getCache();
    }
    public function transactional($func)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'transactional', array('func' => $func), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'wrapInTransaction', array('func' => $func), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'commit', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->commit();
    }
    public function rollback()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'rollback', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getClassMetadata', array('className' => $className), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'createQuery', array('dql' => $dql), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'createNamedQuery', array('name' => $name), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'createQueryBuilder', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'flush', array('entity' => $entity), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'clear', array('entityName' => $entityName), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->clear($entityName);
    }
    public function close()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'close', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->close();
    }
    public function persist($entity)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'persist', array('entity' => $entity), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'remove', array('entity' => $entity), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'refresh', array('entity' => $entity), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'detach', array('entity' => $entity), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'merge', array('entity' => $entity), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getRepository', array('entityName' => $entityName), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'contains', array('entity' => $entity), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getEventManager', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getConfiguration', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'isOpen', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getUnitOfWork', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getProxyFactory', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'initializeObject', array('obj' => $obj), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'getFilters', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'isFiltersStateClean', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'hasFilters', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return $this->valueHolder71400->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera159d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder71400) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder71400 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder71400->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, '__get', ['name' => $name], $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        if (isset(self::$publicPropertieseb381[$name])) {
            return $this->valueHolder71400->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71400;
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
        $targetObject = $this->valueHolder71400;
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
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71400;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder71400;
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
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, '__isset', array('name' => $name), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71400;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder71400;
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
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, '__unset', array('name' => $name), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder71400;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder71400;
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
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, '__clone', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        $this->valueHolder71400 = clone $this->valueHolder71400;
    }
    public function __sleep()
    {
        $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, '__sleep', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
        return array('valueHolder71400');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera159d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera159d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera159d && ($this->initializera159d->__invoke($valueHolder71400, $this, 'initializeProxy', array(), $this->initializera159d) || 1) && $this->valueHolder71400 = $valueHolder71400;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder71400;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder71400;
    }
}
