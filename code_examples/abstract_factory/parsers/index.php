<?php
require_once __DIR__ . "/../../bootstrap.php";
use abstract_factory\parsers\libs\XMLParserFactory;
use abstract_factory\parsers\libs\CSVParserFactory;

$parsers = [
    new XMLParserFactory(),
    new CSVParserFactory()
];

foreach ($parsers as $parser) {
    $parser->createParser()->parse();
}

