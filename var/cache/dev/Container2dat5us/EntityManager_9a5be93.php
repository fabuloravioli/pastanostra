<?php

namespace Container2dat5us;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere1aff = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd6f78 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8795c = [
        
    ];

    public function getConnection()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getConnection', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getMetadataFactory', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getExpressionBuilder', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'beginTransaction', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getCache', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'transactional', array('func' => $func), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'commit', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->commit();
    }

    public function rollback()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'rollback', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getClassMetadata', array('className' => $className), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'createQuery', array('dql' => $dql), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'createNamedQuery', array('name' => $name), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'createQueryBuilder', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'flush', array('entity' => $entity), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'clear', array('entityName' => $entityName), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->clear($entityName);
    }

    public function close()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'close', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->close();
    }

    public function persist($entity)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'persist', array('entity' => $entity), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'remove', array('entity' => $entity), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'refresh', array('entity' => $entity), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'detach', array('entity' => $entity), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'merge', array('entity' => $entity), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'contains', array('entity' => $entity), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getEventManager', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getConfiguration', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'isOpen', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getUnitOfWork', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getProxyFactory', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'initializeObject', array('obj' => $obj), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'getFilters', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'isFiltersStateClean', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'hasFilters', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return $this->valueHoldere1aff->hasFilters();
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

        $instance->initializerd6f78 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere1aff) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere1aff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere1aff->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, '__get', ['name' => $name], $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        if (isset(self::$publicProperties8795c[$name])) {
            return $this->valueHoldere1aff->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1aff;

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

        $targetObject = $this->valueHoldere1aff;
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
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1aff;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere1aff;
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
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, '__isset', array('name' => $name), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1aff;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere1aff;
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
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, '__unset', array('name' => $name), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1aff;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere1aff;
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
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, '__clone', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        $this->valueHoldere1aff = clone $this->valueHoldere1aff;
    }

    public function __sleep()
    {
        $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, '__sleep', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;

        return array('valueHoldere1aff');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd6f78 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd6f78;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd6f78 && ($this->initializerd6f78->__invoke($valueHoldere1aff, $this, 'initializeProxy', array(), $this->initializerd6f78) || 1) && $this->valueHoldere1aff = $valueHoldere1aff;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere1aff;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere1aff;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
