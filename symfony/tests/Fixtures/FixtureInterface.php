<?php

namespace App\Tests\Fixtures;

use Doctrine\Persistence\ObjectManager;

interface FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     * @param array $params
     */
    public function load(ObjectManager $manager, array $params);
}