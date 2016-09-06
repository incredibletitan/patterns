<?php

namespace strategy\questions\libs;

/**
 * Class MarkLogicMarker
 *
 * @author Yuriy Stos
 */
class MarkLogicMarker extends Marker
{
    /**
     * Create logical marker
     *
     * @return bool
     */
    public function mark($response)
    {
        return (bool)rand(0, 1);
    }
}