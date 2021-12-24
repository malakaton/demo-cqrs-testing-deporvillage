<?php

declare(strict_types=1);

namespace App\Tests\e2e\Shared\Infrastructure\Http\Controller;

use App\Tests\Fixtures\DataFixtures\ReturnOrderFixtures;
use App\Tests\Fixtures\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class EntryPointTestCase extends WebTestCase
{
    use FixturesTrait;

    protected KernelBrowser $client;

    public function setUp(): void
    {
        parent::setUp();

        $this->client = static::createClient();

        $this->loadFixtures(
            [
                ReturnOrderFixtures::class,
            ],
            [
                'country' => 'ES'
            ]
        );
    }
}
