<?php

declare(strict_types=1);

namespace App\Tests\Fixtures\DataFixtures;

use App\ReturnOrder\Domain\Model\ReturnOrder;
use App\Tests\Fixtures\Builder\ReturnOrderBuilder;
use App\Tests\Fixtures\FixtureInterface;
use App\Tests\Stubs\ValueObject\MotherCreator;
use Doctrine\Persistence\ObjectManager;

class ReturnOrderFixtures implements FixtureInterface
{
    public const RETURN_ORDER_EMPTY = self::class.':empty';
    public const RETURN_ORDER_COUNTRY = self::class.':country';

    private static array $fixturesRepository;

    public function load(ObjectManager $manager, array $params): void
    {
        $returnOrder = ReturnOrderBuilder::createEmpty()->getWriteReturnOrder();

        $manager->persist($returnOrder);

        self::$fixturesRepository[self::RETURN_ORDER_EMPTY] = $returnOrder;

        $returnOrderCountryEs = ReturnOrderBuilder::createEmpty()->withCountry(
            $params['country'] ?? MotherCreator::random()->countryCode()
        )->getWriteReturnOrder();

        $manager->persist($returnOrderCountryEs);

        self::$fixturesRepository[self::RETURN_ORDER_COUNTRY] = $returnOrderCountryEs;

        $manager->flush();
    }

    public static function getFixturesRepository(string $key): ReturnOrder
    {
        return static::$fixturesRepository[$key];
    }
}