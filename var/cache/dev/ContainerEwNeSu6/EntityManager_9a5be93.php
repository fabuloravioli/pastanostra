<?php

namespace ContainerEwNeSu6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb633f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer922c8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese5a2e = [
        
    ];

    public function getConnection()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getConnection', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getMetadataFactory', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getExpressionBuilder', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'beginTransaction', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getCache', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'transactional', array('func' => $func), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'commit', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->commit();
    }

    public function rollback()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'rollback', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getClassMetadata', array('className' => $className), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'createQuery', array('dql' => $dql), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'createNamedQuery', array('name' => $name), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'createQueryBuilder', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'flush', array('entity' => $entity), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'clear', array('entityName' => $entityName), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->clear($entityName);
    }

    public function close()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'close', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->close();
    }

    public function persist($entity)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'persist', array('entity' => $entity), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'remove', array('entity' => $entity), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'refresh', array('entity' => $entity), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'detach', array('entity' => $entity), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'merge', array('entity' => $entity), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'contains', array('entity' => $entity), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getEventManager', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getConfiguration', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'isOpen', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getUnitOfWork', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getProxyFactory', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'initializeObject', array('obj' => $obj), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'getFilters', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'isFiltersStateClean', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'hasFilters', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return $this->valueHolderb633f->hasFilters();
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

        $instance->initializer922c8 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb633f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb633f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb633f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, '__get', ['name' => $name], $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        if (isset(self::$publicPropertiese5a2e[$name])) {
            return $this->valueHolderb633f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb633f;

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

        $targetObject = $this->valueHolderb633f;
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
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb633f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb633f;
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
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, '__isset', array('name' => $name), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb633f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb633f;
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
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, '__unset', array('name' => $name), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb633f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb633f;
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
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, '__clone', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        $this->valueHolderb633f = clone $this->valueHolderb633f;
    }

    public function __sleep()
    {
        $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, '__sleep', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;

        return array('valueHolderb633f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer922c8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer922c8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer922c8 && ($this->initializer922c8->__invoke($valueHolderb633f, $this, 'initializeProxy', array(), $this->initializer922c8) || 1) && $this->valueHolderb633f = $valueHolderb633f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb633f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb633f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
