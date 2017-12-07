<?php

namespace libs;

/**
 * Class XmlParser
 *
 * @author Yuriy Stos
 */
class XmlParser extends StringParsingStrategy
{
    /**
     * @inheritdoc
     */
    public function parse(string $parsingString)
    {
        $xmlString = simplexml_load_string($parsingString, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xmlString);

        return json_decode($json,TRUE);
    }
}
