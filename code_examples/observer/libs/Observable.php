<?php

namespace libs;

/**
 * Interface Observable
 *
 * @author Yuriy Stos
 */
interface Observable
{
    function attach(Observer $observer);
    function detach(Observer $observer);
    function notify();
}