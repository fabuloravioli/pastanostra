<?php

namespace ContainerR1WN72C;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereaed4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4dd2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese9668 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getConnection', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getMetadataFactory', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getExpressionBuilder', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'beginTransaction', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getCache', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'transactional', array('func' => $func), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'commit', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->commit();
    }

    public function rollback()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'rollback', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getClassMetadata', array('className' => $className), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'createQuery', array('dql' => $dql), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'createNamedQuery', array('name' => $name), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'createQueryBuilder', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'flush', array('entity' => $entity), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'clear', array('entityName' => $entityName), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->clear($entityName);
    }

    public function close()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'close', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->close();
    }

    public function persist($entity)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'persist', array('entity' => $entity), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'remove', array('entity' => $entity), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'refresh', array('entity' => $entity), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'detach', array('entity' => $entity), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'merge', array('entity' => $entity), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'contains', array('entity' => $entity), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getEventManager', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getConfiguration', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'isOpen', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getUnitOfWork', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getProxyFactory', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'initializeObject', array('obj' => $obj), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'getFilters', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'isFiltersStateClean', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'hasFilters', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return $this->valueHoldereaed4->hasFilters();
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

        $instance->initializerd4dd2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldereaed4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereaed4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereaed4->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, '__get', ['name' => $name], $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        if (isset(self::$publicPropertiese9668[$name])) {
            return $this->valueHoldereaed4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaed4;

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

        $targetObject = $this->valueHoldereaed4;
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
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaed4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereaed4;
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
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, '__isset', array('name' => $name), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaed4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereaed4;
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
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, '__unset', array('name' => $name), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaed4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereaed4;
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
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, '__clone', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        $this->valueHoldereaed4 = clone $this->valueHoldereaed4;
    }

    public function __sleep()
    {
        $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, '__sleep', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;

        return array('valueHoldereaed4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd4dd2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd4dd2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd4dd2 && ($this->initializerd4dd2->__invoke($valueHoldereaed4, $this, 'initializeProxy', array(), $this->initializerd4dd2) || 1) && $this->valueHoldereaed4 = $valueHoldereaed4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereaed4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereaed4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
