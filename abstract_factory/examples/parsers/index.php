<?php
require_once __DIR__ . "/../../../bootstrap.php";
use abstract_factory\examples\parsers\libs\XMLParser;

$parser = new XMLParser();
$parser->parse();