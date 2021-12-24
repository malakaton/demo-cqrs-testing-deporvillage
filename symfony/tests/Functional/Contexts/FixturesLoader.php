<?php

declare(strict_types=1);

namespace App\Tests\Functional\Contexts;

use App\Tests\Fixtures\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class FixturesLoader extends KernelTestCase
{
    use FixturesTrait;

    public function load(array $classNames, array $params = []): void
    {
        $this->loadFixtures($classNames, $params);
    }
}