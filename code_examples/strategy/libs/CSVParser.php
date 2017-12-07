<?php

namespace libs;

/**
 * Class CSVParser
 *
 * @author Yuriy Stos
 */
class CSVParser extends StringParsingStrategy
{
    /**
     * @inheritdoc
     */
    public function parse(string $parsingString)
    {
        return str_getcsv($parsingString);
    }
}