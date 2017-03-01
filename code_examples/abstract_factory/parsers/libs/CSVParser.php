<?php
namespace abstract_factory\parsers\libs;

/**
 * Class CSVParser
 *
 * @author Yuriy Stos
 */
class CSVParser extends Parser
{
    /**
     * @inheritdoc
     */
    public function parse()
    {
        echo "CSV parsed";
    }
}