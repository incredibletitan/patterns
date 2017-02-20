<?php
require_once __DIR__ . "/../../../bootstrap.php";
use abstract_factory\examples\parsers\libs\XMLParserFactory;
use abstract_factory\examples\parsers\libs\CSVParserFactory;

$parsers = [
    new XMLParserFactory(),
    new CSVParserFactory()
];

foreach ($parsers as $parser) {
    $parser->createParser()->parse();
}

