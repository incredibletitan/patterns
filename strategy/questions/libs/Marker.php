<?php

namespace strategy\questions\libs;

/**
 * Class Marker
 *
 * @author Yuriy Stos
 */
abstract class Marker
{
    /**
     * @var $test - Template with which marker will be compared
     */
    protected $test;

    /**
     * Marker constructor.
     * @param $test
     */
    public function __construct($test)
    {
        $this->test = $test;
    }

    /**
     * Compare $this->test and $response variables by specific algorithm needed to be implemented in this method
     *
     * @param $response
     * @return mixed
     */
    abstract public function mark($response);
}
