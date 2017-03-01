<?php

namespace strategy\questions\libs;

/**
 * Class Question
 *
 * @author Yuriy Stos
 */
class Question
{
    /**
     * @var $prompt - Question which need to be viewed
     */
    protected $prompt;

    /**
     * @var $marker - Question marker
     */
    protected $marker;

    /**
     * Question constructor.
     *
     * @param $prompt - Question which need to be viewed
     * @param Marker $marker - Instance with Marker type.
     */
    public function __construct($prompt, Marker $marker)
    {
        $this->prompt = $prompt;
        $this->marker = $marker;
    }

    /**
     * Test question matches to marker or not
     *
     * @param $response
     *
     * @return bool
     */
    public function mark($response)
    {
        return $this->marker->mark($response);
    }
}
