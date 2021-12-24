<?php

namespace App\Tests\Fixtures;

use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Contracts\Service\ResetInterface;

trait FixturesTrait
{
    static protected string $environment = 'test';
    static protected array $containers = [];

    protected static function getContainer(): ContainerInterface
    {
        $cacheKey = self::$environment;
        if (empty(self::$containers[$cacheKey])) {
            $options = [
                'environment' => self::$environment,
            ];
            $kernel = self::createKernel($options);
            $kernel->boot();

            $container = $kernel->getContainer();
            if ($container->has('test.service_container')) {
                self::$containers[$cacheKey] = $container->get('test.service_container');
            } else {
                self::$containers[$cacheKey] = $container;
            }
        }

        return self::$containers[$cacheKey];
    }

    protected function loadFixtures(array $classNames = [], array $params = [], bool $append = false, ?string $omName = 'doctrine_mongodb.odm.document_manager', string $registryName = 'doctrine_mongodb', ?int $purgeMode = null): void
    {
        if (is_numeric($omName)) {
            throw new \LogicException("You must provide an 'omName' parameter to specify which DocumentManager to use!");
        }

        /**
         * @var $dm DocumentManager document manager
         */
        $dm = self::getContainer()->get($omName);

        if (!$append) {
            $this->mongoDbPurge($dm);
        }

        // load classes
        foreach ($classNames as $className) {
            if (!class_exists($className)) {
                throw new \LogicException('Fixtures class "'.$className.'" could not be found.');
            }
            $inst = new $className;

            if (!$inst instanceof FixtureInterface) {
                throw new \LogicException('Fixtures class "'.$className.'" is not instance of FixtureInterface.');
            }

            if ($inst instanceof ContainerAwareInterface) {
                $inst->setContainer(self::getContainer());
            }

            $inst->load($dm, $params);
        }
    }

    protected function mongoDbPurge(DocumentManager $dm): void
    {
        $metadatas = $dm->getMetadataFactory()->getAllMetadata();
        foreach ($metadatas as $metadata) {
            if (!$metadata->isMappedSuperclass) {
                $dm->getDocumentCollection($metadata->name)->drop();
            }
        }
        $dm->getSchemaManager()->ensureIndexes();
    }

    protected function tearDown(): void
    {
        if (is_array(self::$containers)) {
            foreach (self::$containers as $idx => $container) {
                if ($container instanceof ResetInterface) {
                    self::$containers[$idx]->reset();
                }
            }
        }

        self::$containers = [];

        parent::tearDown();
    }
}