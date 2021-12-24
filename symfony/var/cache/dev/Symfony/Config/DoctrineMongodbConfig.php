<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMongodb'.\DIRECTORY_SEPARATOR.'DocumentManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMongodb'.\DIRECTORY_SEPARATOR.'ConnectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMongodb'.\DIRECTORY_SEPARATOR.'TypeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMongodb'.\DIRECTORY_SEPARATOR.'DefaultCommitOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class DoctrineMongodbConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $documentManagers;
    private $connections;
    private $resolveTargetDocuments;
    private $types;
    private $proxyNamespace;
    private $proxyDir;
    private $autoGenerateProxyClasses;
    private $hydratorNamespace;
    private $hydratorDir;
    private $autoGenerateHydratorClasses;
    private $persistentCollectionNamespace;
    private $persistentCollectionDir;
    private $autoGeneratePersistentCollectionClasses;
    private $fixtureLoader;
    private $defaultDocumentManager;
    private $defaultConnection;
    private $defaultDatabase;
    private $defaultCommitOptions;
    
    public function documentManager(string $id, array $value = []): \Symfony\Config\DoctrineMongodb\DocumentManagerConfig
    {
        if (!isset($this->documentManagers[$id])) {
            return $this->documentManagers[$id] = new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig($value);
        }
        if ([] === $value) {
            return $this->documentManagers[$id];
        }
    
        throw new InvalidConfigurationException('The node created by "documentManager()" has already been initialized. You cannot pass values the second time you call documentManager().');
    }
    
    public function connection(string $id, array $value = []): \Symfony\Config\DoctrineMongodb\ConnectionConfig
    {
        if (!isset($this->connections[$id])) {
            return $this->connections[$id] = new \Symfony\Config\DoctrineMongodb\ConnectionConfig($value);
        }
        if ([] === $value) {
            return $this->connections[$id];
        }
    
        throw new InvalidConfigurationException('The node created by "connection()" has already been initialized. You cannot pass values the second time you call connection().');
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function resolveTargetDocument(string $interface, $value): self
    {
        $this->resolveTargetDocuments[$interface] = $value;
    
        return $this;
    }
    
    public function type(string $name, array $value = []): \Symfony\Config\DoctrineMongodb\TypeConfig
    {
        if (!isset($this->types[$name])) {
            return $this->types[$name] = new \Symfony\Config\DoctrineMongodb\TypeConfig($value);
        }
        if ([] === $value) {
            return $this->types[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "type()" has already been initialized. You cannot pass values the second time you call type().');
    }
    
    /**
     * @default 'MongoDBODMProxies'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function proxyNamespace($value): self
    {
        $this->proxyNamespace = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.cache_dir%/doctrine/odm/mongodb/Proxies'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function proxyDir($value): self
    {
        $this->proxyDir = $value;
    
        return $this;
    }
    
    /**
     * @default 3
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoGenerateProxyClasses($value): self
    {
        $this->autoGenerateProxyClasses = $value;
    
        return $this;
    }
    
    /**
     * @default 'Hydrators'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hydratorNamespace($value): self
    {
        $this->hydratorNamespace = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.cache_dir%/doctrine/odm/mongodb/Hydrators'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hydratorDir($value): self
    {
        $this->hydratorDir = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoGenerateHydratorClasses($value): self
    {
        $this->autoGenerateHydratorClasses = $value;
    
        return $this;
    }
    
    /**
     * @default 'PersistentCollections'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function persistentCollectionNamespace($value): self
    {
        $this->persistentCollectionNamespace = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.cache_dir%/doctrine/odm/mongodb/PersistentCollections'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function persistentCollectionDir($value): self
    {
        $this->persistentCollectionDir = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoGeneratePersistentCollectionClasses($value): self
    {
        $this->autoGeneratePersistentCollectionClasses = $value;
    
        return $this;
    }
    
    /**
     * @default 'Symfony\\Bridge\\Doctrine\\DataFixtures\\ContainerAwareLoader'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fixtureLoader($value): self
    {
        $this->fixtureLoader = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultDocumentManager($value): self
    {
        $this->defaultDocumentManager = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultConnection($value): self
    {
        $this->defaultConnection = $value;
    
        return $this;
    }
    
    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultDatabase($value): self
    {
        $this->defaultDatabase = $value;
    
        return $this;
    }
    
    public function defaultCommitOptions(array $value = []): \Symfony\Config\DoctrineMongodb\DefaultCommitOptionsConfig
    {
        if (null === $this->defaultCommitOptions) {
            $this->defaultCommitOptions = new \Symfony\Config\DoctrineMongodb\DefaultCommitOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaultCommitOptions()" has already been initialized. You cannot pass values the second time you call defaultCommitOptions().');
        }
    
        return $this->defaultCommitOptions;
    }
    
    public function getExtensionAlias(): string
    {
        return 'doctrine_mongodb';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['document_managers'])) {
            $this->documentManagers = array_map(function ($v) { return new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig($v); }, $value['document_managers']);
            unset($value['document_managers']);
        }
    
        if (isset($value['connections'])) {
            $this->connections = array_map(function ($v) { return new \Symfony\Config\DoctrineMongodb\ConnectionConfig($v); }, $value['connections']);
            unset($value['connections']);
        }
    
        if (isset($value['resolve_target_documents'])) {
            $this->resolveTargetDocuments = $value['resolve_target_documents'];
            unset($value['resolve_target_documents']);
        }
    
        if (isset($value['types'])) {
            $this->types = array_map(function ($v) { return new \Symfony\Config\DoctrineMongodb\TypeConfig($v); }, $value['types']);
            unset($value['types']);
        }
    
        if (isset($value['proxy_namespace'])) {
            $this->proxyNamespace = $value['proxy_namespace'];
            unset($value['proxy_namespace']);
        }
    
        if (isset($value['proxy_dir'])) {
            $this->proxyDir = $value['proxy_dir'];
            unset($value['proxy_dir']);
        }
    
        if (isset($value['auto_generate_proxy_classes'])) {
            $this->autoGenerateProxyClasses = $value['auto_generate_proxy_classes'];
            unset($value['auto_generate_proxy_classes']);
        }
    
        if (isset($value['hydrator_namespace'])) {
            $this->hydratorNamespace = $value['hydrator_namespace'];
            unset($value['hydrator_namespace']);
        }
    
        if (isset($value['hydrator_dir'])) {
            $this->hydratorDir = $value['hydrator_dir'];
            unset($value['hydrator_dir']);
        }
    
        if (isset($value['auto_generate_hydrator_classes'])) {
            $this->autoGenerateHydratorClasses = $value['auto_generate_hydrator_classes'];
            unset($value['auto_generate_hydrator_classes']);
        }
    
        if (isset($value['persistent_collection_namespace'])) {
            $this->persistentCollectionNamespace = $value['persistent_collection_namespace'];
            unset($value['persistent_collection_namespace']);
        }
    
        if (isset($value['persistent_collection_dir'])) {
            $this->persistentCollectionDir = $value['persistent_collection_dir'];
            unset($value['persistent_collection_dir']);
        }
    
        if (isset($value['auto_generate_persistent_collection_classes'])) {
            $this->autoGeneratePersistentCollectionClasses = $value['auto_generate_persistent_collection_classes'];
            unset($value['auto_generate_persistent_collection_classes']);
        }
    
        if (isset($value['fixture_loader'])) {
            $this->fixtureLoader = $value['fixture_loader'];
            unset($value['fixture_loader']);
        }
    
        if (isset($value['default_document_manager'])) {
            $this->defaultDocumentManager = $value['default_document_manager'];
            unset($value['default_document_manager']);
        }
    
        if (isset($value['default_connection'])) {
            $this->defaultConnection = $value['default_connection'];
            unset($value['default_connection']);
        }
    
        if (isset($value['default_database'])) {
            $this->defaultDatabase = $value['default_database'];
            unset($value['default_database']);
        }
    
        if (isset($value['default_commit_options'])) {
            $this->defaultCommitOptions = new \Symfony\Config\DoctrineMongodb\DefaultCommitOptionsConfig($value['default_commit_options']);
            unset($value['default_commit_options']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->documentManagers) {
            $output['document_managers'] = array_map(function ($v) { return $v->toArray(); }, $this->documentManagers);
        }
        if (null !== $this->connections) {
            $output['connections'] = array_map(function ($v) { return $v->toArray(); }, $this->connections);
        }
        if (null !== $this->resolveTargetDocuments) {
            $output['resolve_target_documents'] = $this->resolveTargetDocuments;
        }
        if (null !== $this->types) {
            $output['types'] = array_map(function ($v) { return $v->toArray(); }, $this->types);
        }
        if (null !== $this->proxyNamespace) {
            $output['proxy_namespace'] = $this->proxyNamespace;
        }
        if (null !== $this->proxyDir) {
            $output['proxy_dir'] = $this->proxyDir;
        }
        if (null !== $this->autoGenerateProxyClasses) {
            $output['auto_generate_proxy_classes'] = $this->autoGenerateProxyClasses;
        }
        if (null !== $this->hydratorNamespace) {
            $output['hydrator_namespace'] = $this->hydratorNamespace;
        }
        if (null !== $this->hydratorDir) {
            $output['hydrator_dir'] = $this->hydratorDir;
        }
        if (null !== $this->autoGenerateHydratorClasses) {
            $output['auto_generate_hydrator_classes'] = $this->autoGenerateHydratorClasses;
        }
        if (null !== $this->persistentCollectionNamespace) {
            $output['persistent_collection_namespace'] = $this->persistentCollectionNamespace;
        }
        if (null !== $this->persistentCollectionDir) {
            $output['persistent_collection_dir'] = $this->persistentCollectionDir;
        }
        if (null !== $this->autoGeneratePersistentCollectionClasses) {
            $output['auto_generate_persistent_collection_classes'] = $this->autoGeneratePersistentCollectionClasses;
        }
        if (null !== $this->fixtureLoader) {
            $output['fixture_loader'] = $this->fixtureLoader;
        }
        if (null !== $this->defaultDocumentManager) {
            $output['default_document_manager'] = $this->defaultDocumentManager;
        }
        if (null !== $this->defaultConnection) {
            $output['default_connection'] = $this->defaultConnection;
        }
        if (null !== $this->defaultDatabase) {
            $output['default_database'] = $this->defaultDatabase;
        }
        if (null !== $this->defaultCommitOptions) {
            $output['default_commit_options'] = $this->defaultCommitOptions->toArray();
        }
    
        return $output;
    }

}
