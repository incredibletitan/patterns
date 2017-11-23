<?php

namespace libs;

/**
 * Interface Subject
 *
 * @author Yuriy Stos
 */
interface Subject
{
    /**
     * Attaches an Observer
     *
     * @param Observer $observer - Observer instance
     * @return mixed
     */
    function attach(Observer $observer);

    /**
     * Detaches an Observer
     *
     * @param Observer $observer - Observer instance
     * @return mixed
     */
    function detach(Observer $observer);

    /**
     * Notifies all attached observers
     *
     * @return mixed
     */
    function notify();
}