<?php

namespace Symfony\Config\DoctrineMongodb;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DocumentManagerConfig'.\DIRECTORY_SEPARATOR.'ProfilerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DocumentManagerConfig'.\DIRECTORY_SEPARATOR.'FilterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DocumentManagerConfig'.\DIRECTORY_SEPARATOR.'MetadataCacheDriverConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DocumentManagerConfig'.\DIRECTORY_SEPARATOR.'MappingConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class DocumentManagerConfig 
{
    private $connection;
    private $database;
    private $logging;
    private $profiler;
    private $defaultDocumentRepositoryClass;
    private $defaultGridfsRepositoryClass;
    private $repositoryFactory;
    private $persistentCollectionFactory;
    private $autoMapping;
    private $filters;
    private $metadataCacheDriver;
    private $mappings;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connection($value): self
    {
        $this->connection = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function database($value): self
    {
        $this->database = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.debug%'
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function logging($value): self
    {
        $this->logging = $value;
    
        return $this;
    }
    
    public function profiler(array $value = []): \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\ProfilerConfig
    {
        if (null === $this->profiler) {
            $this->profiler = new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\ProfilerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "profiler()" has already been initialized. You cannot pass values the second time you call profiler().');
        }
    
        return $this->profiler;
    }
    
    /**
     * @default 'Doctrine\\ODM\\MongoDB\\Repository\\DocumentRepository'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultDocumentRepositoryClass($value): self
    {
        $this->defaultDocumentRepositoryClass = $value;
    
        return $this;
    }
    
    /**
     * @default 'Doctrine\\ODM\\MongoDB\\Repository\\DefaultGridFSRepository'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultGridfsRepositoryClass($value): self
    {
        $this->defaultGridfsRepositoryClass = $value;
    
        return $this;
    }
    
    /**
     * @default 'doctrine_mongodb.odm.container_repository_factory'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function repositoryFactory($value): self
    {
        $this->repositoryFactory = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function persistentCollectionFactory($value): self
    {
        $this->persistentCollectionFactory = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoMapping($value): self
    {
        $this->autoMapping = $value;
    
        return $this;
    }
    
    public function filter(string $name, array $value = []): \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\FilterConfig
    {
        if (!isset($this->filters[$name])) {
            return $this->filters[$name] = new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\FilterConfig($value);
        }
        if ([] === $value) {
            return $this->filters[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "filter()" has already been initialized. You cannot pass values the second time you call filter().');
    }
    
    public function metadataCacheDriver(array $value = []): \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\MetadataCacheDriverConfig
    {
        if (null === $this->metadataCacheDriver) {
            $this->metadataCacheDriver = new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\MetadataCacheDriverConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "metadataCacheDriver()" has already been initialized. You cannot pass values the second time you call metadataCacheDriver().');
        }
    
        return $this->metadataCacheDriver;
    }
    
    public function mapping(string $name, array $value = []): \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\MappingConfig
    {
        if (!isset($this->mappings[$name])) {
            return $this->mappings[$name] = new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\MappingConfig($value);
        }
        if ([] === $value) {
            return $this->mappings[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "mapping()" has already been initialized. You cannot pass values the second time you call mapping().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['connection'])) {
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
    
        if (isset($value['database'])) {
            $this->database = $value['database'];
            unset($value['database']);
        }
    
        if (isset($value['logging'])) {
            $this->logging = $value['logging'];
            unset($value['logging']);
        }
    
        if (isset($value['profiler'])) {
            $this->profiler = new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\ProfilerConfig($value['profiler']);
            unset($value['profiler']);
        }
    
        if (isset($value['default_document_repository_class'])) {
            $this->defaultDocumentRepositoryClass = $value['default_document_repository_class'];
            unset($value['default_document_repository_class']);
        }
    
        if (isset($value['default_gridfs_repository_class'])) {
            $this->defaultGridfsRepositoryClass = $value['default_gridfs_repository_class'];
            unset($value['default_gridfs_repository_class']);
        }
    
        if (isset($value['repository_factory'])) {
            $this->repositoryFactory = $value['repository_factory'];
            unset($value['repository_factory']);
        }
    
        if (isset($value['persistent_collection_factory'])) {
            $this->persistentCollectionFactory = $value['persistent_collection_factory'];
            unset($value['persistent_collection_factory']);
        }
    
        if (isset($value['auto_mapping'])) {
            $this->autoMapping = $value['auto_mapping'];
            unset($value['auto_mapping']);
        }
    
        if (isset($value['filters'])) {
            $this->filters = array_map(function ($v) { return new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\FilterConfig($v); }, $value['filters']);
            unset($value['filters']);
        }
    
        if (isset($value['metadata_cache_driver'])) {
            $this->metadataCacheDriver = new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\MetadataCacheDriverConfig($value['metadata_cache_driver']);
            unset($value['metadata_cache_driver']);
        }
    
        if (isset($value['mappings'])) {
            $this->mappings = array_map(function ($v) { return new \Symfony\Config\DoctrineMongodb\DocumentManagerConfig\MappingConfig($v); }, $value['mappings']);
            unset($value['mappings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->connection) {
            $output['connection'] = $this->connection;
        }
        if (null !== $this->database) {
            $output['database'] = $this->database;
        }
        if (null !== $this->logging) {
            $output['logging'] = $this->logging;
        }
        if (null !== $this->profiler) {
            $output['profiler'] = $this->profiler->toArray();
        }
        if (null !== $this->defaultDocumentRepositoryClass) {
            $output['default_document_repository_class'] = $this->defaultDocumentRepositoryClass;
        }
        if (null !== $this->defaultGridfsRepositoryClass) {
            $output['default_gridfs_repository_class'] = $this->defaultGridfsRepositoryClass;
        }
        if (null !== $this->repositoryFactory) {
            $output['repository_factory'] = $this->repositoryFactory;
        }
        if (null !== $this->persistentCollectionFactory) {
            $output['persistent_collection_factory'] = $this->persistentCollectionFactory;
        }
        if (null !== $this->autoMapping) {
            $output['auto_mapping'] = $this->autoMapping;
        }
        if (null !== $this->filters) {
            $output['filters'] = array_map(function ($v) { return $v->toArray(); }, $this->filters);
        }
        if (null !== $this->metadataCacheDriver) {
            $output['metadata_cache_driver'] = $this->metadataCacheDriver->toArray();
        }
        if (null !== $this->mappings) {
            $output['mappings'] = array_map(function ($v) { return $v->toArray(); }, $this->mappings);
        }
    
        return $output;
    }

}
