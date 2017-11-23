<?php

namespace libs;

/**
 * Class FatherObserver
 *
 * @author Yuriy Stos
 */
class FatherObserver implements Observer
{
    /**
     * @inheritdoc
     */
    public function update(Subject $dayBook)
    {
        if ($dayBook->getMark()->getMark() < 6) {
            echo "No friends. No music. No life";
        }
    }
}