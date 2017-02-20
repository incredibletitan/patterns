<?php

namespace abstract_factory\examples\parsers\libs;

/**
 * Class CSVParserFactory
 *
 * @author Yuriy Stos
 */
class CSVParserFactory extends ParserFactory
{
    /**
     * @inheritdoc
     */
    public function createParser()
    {
        return new CSVParser();
    }
}