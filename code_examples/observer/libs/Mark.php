<?php

namespace libs;

/**
 * Class Mark
 *
 * @author Yuriy Stos
 */
class Mark
{
    /**
     * @var int $mark - Mark
     */
    private $mark;

    /**
     * @var string $lessonName - Name of the lesson
     */
    private $lessonName;

    /**
     * Mark constructor.
     * @param string $lessonName - Name of the lesson
     * @param int $mark - Mark
     */
    public function __construct($lessonName, $mark)
    {
        $this->lessonName = $lessonName;
        $this->mark = $mark;
    }

    /**
     * Getter for mark
     *
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Getter for lesson
     *
     * @return string
     */
    public function getLessonName()
    {
        return $this->lessonName;
    }
}
