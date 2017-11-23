<?php
/**
 * Created by PhpStorm.
 * User: x
 * Date: 11/23/17
 * Time: 8:57 PM
 */

namespace libs;

interface Observer
{
    /**
     * @param Subject $subject - Subject instance
     * @return mixed
     */
    function update(Subject $subject);
}