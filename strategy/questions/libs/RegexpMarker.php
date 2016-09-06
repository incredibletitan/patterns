<?php

namespace strategy\questions\libs;

/**
 * Class RegexpMarker
 *
 * @author Yuriy Stos
 */
class RegexpMarker extends Marker
{
    /**
     * Create regexp marker
     *
     * @return bool
     */
    public function mark($response)
    {
        return preg_match($this->test, $response);
    }
}
