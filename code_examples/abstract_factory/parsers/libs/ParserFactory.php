<?php

namespace abstract_factory\parsers\libs;

/**
 * Class ParserFactory
 *
 * @author Yuriy Stos
 */
abstract class ParserFactory
{
    /**
     * Creates instance of Parser type
     *
     * @return mixed
     */
    abstract function createParser();
}