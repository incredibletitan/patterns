<?php

namespace libs;

/**
 * Class StringParsingStrategy
 *
 * @author Yuriy Stos
 */
abstract class StringParsingStrategy
{
    /**
     * Parses specified string
     *
     * @param string $parsingString - String needed to be parsed
     * @return mixed
     */
    abstract function parse(string $parsingString);
}
