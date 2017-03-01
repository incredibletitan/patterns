<?php

namespace abstract_factory\parsers\libs;

/**
 * Class XMLParserFactory
 *
 * @author Yuriy Stos
 */
class XMLParserFactory extends ParserFactory
{
    /**
     * @inheritdoc
     */
    public function createParser()
    {
        return new XMLParser();
    }
}