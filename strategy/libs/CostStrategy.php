<?php

namespace strategy\libs;

/**
 * Class CostStrategy
 *
 * @author Yuriy Stos
 */
abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson);
    abstract public function chargeType();
}
