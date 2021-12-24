<?php

declare(strict_types=1);

namespace App\Tests\Unit\Mocks\ReturnOrder\Domain\Strategy;

use App\ReturnOrder\Domain\Strategy\CarrierReturnCodeStrategy;
use App\Shared\Domain\ValueObject\Country;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ObjectProphecy;

final class CarrierReturnCodeStrategyMockTestCase extends TestCase
{
    /**
     * @var CarrierReturnCodeStrategy|ObjectProphecy
     */
    private $carrierReturnCodeStrategy;

    public static function create(): self
    {
        return new self();
    }

    public function shouldReturnPickupCode(Country $country): void
    {
        $this->carrierReturnCodeStrategy->calculateReturnCode(
            $country
        )->shouldBeCalled()->willReturn(30);
    }

    /** @return CarrierReturnCodeStrategy|ObjectProphecy */
    public function MockStrategy(): ObjectProphecy
    {
        return $this->carrierReturnCodeStrategy = $this->carrierReturnCodeStrategy ?: $this->prophesize(CarrierReturnCodeStrategy::class);
    }
}
