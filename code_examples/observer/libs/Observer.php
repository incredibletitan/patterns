<?php

namespace libs;

/**
 * Interface Observer
 *
 * @author Yuriy Stos
 */
interface Observer
{
    function update(Observable $observable);
}