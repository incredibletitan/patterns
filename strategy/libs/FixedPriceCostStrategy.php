<?php

namespace strategy\libs;

/**
 * Class TimedCostStrategy
 *
 * @author Yuriy Stos
 */
class FixedPriceCostStrategy extends CostStrategy
{
    const FIXED_PRICE = 30;

    public function cost(Lesson $lesson)
    {
        return self::FIXED_PRICE;
    }

    public function chargeType()
    {
        return 'Fixed price rate';
    }
}