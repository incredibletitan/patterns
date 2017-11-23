<?php

namespace libs;

/**
 * Class DayBook
 *
 * @author Yuriy Stos
 */
class DayBook implements Subject
{
    /**
     * @var array $observers - List of Observer objects
     */
    private $observers;

    /**
     * @var Mark $mark
     */
    private $mark;

    /**
     * @inheritdoc
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @inheritdoc
     */
    public function detach(Observer $observer)
    {
        $resultObservers = [];

        foreach ($this->observers as $observerObj) {
            if ($observerObj !== $observer) {
                $resultObservers[] = $observerObj;
            }
        }
        $this->observers = $resultObservers;
    }

    /**
     * @inheritdoc
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Putting a mark into the DayBook
     *
     * @param Mark $mark
     */
    public function putMark(Mark $mark)
    {
        $this->mark = $mark;
        $this->notify();
    }

    /**
     * Getting the mark
     *
     * @return Mark
     */
    public function getMark()
    {
        return $this->mark;
    }
}
