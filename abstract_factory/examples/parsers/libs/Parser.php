<?php

namespace abstract_factory\examples\parsers\libs;

/**
 * Class Parser
 *
 * @author Yuriy Stos
 */
abstract class Parser
{
    /**
     * Parse some file
     *
     * @return mixed
     */
    abstract function parse();
}