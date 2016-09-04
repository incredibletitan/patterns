<?php

namespace strategy\cost\libs;

/**
 * Class Lesson
 *
 * @author Yuriy Stos
 */
abstract class Lesson
{
    private $duration;
    private $costStrategy;

    public function __construct($duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    public function getDuration()
    {
        return $this->duration;
    }
}
