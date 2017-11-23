<?php

namespace libs;

/**
 * Class MotherObserver
 *
 * @author Yuriy Stos
 */
class MotherObserver implements Observer
{
    /**
     * @inheritdoc
     */
    public function update(Subject $dayBook)
    {
        if ($dayBook->getMark()->getMark() < 9) {
            echo "No TV for one week!";
        }
    }
}