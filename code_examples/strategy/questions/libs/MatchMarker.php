<?php

namespace strategy\questions\libs;

/**
 * Class MatchMarker
 *
 * @author Yuriy Stos
 */
class MatchMarker extends Marker
{
    /**
     * @inheritdoc
     *
     * Create match marker
     *
     * @return bool
     */
    public function mark($response)
    {
        return $this->test == $response;
    }
}