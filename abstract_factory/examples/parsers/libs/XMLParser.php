<?php

namespace abstract_factory\examples\parsers\libs;

/**
 * Class XMLParser
 *
 * @author Yuriy Stos
 */
class XMLParser extends Parser
{
    /**
     * @inheritdoc
     */
    public function parse()
    {
        echo "XML parsed";
    }
}