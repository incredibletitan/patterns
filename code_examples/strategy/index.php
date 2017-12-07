<?php
require_once __DIR__ . '/../bootstrap.php';
$reportViewer = new \libs\ReportViewer();

echo "<pre>";
print_r($reportViewer->view(__DIR__ . '/data/catalog.csv'));
echo "</pre>";

echo "<pre>";
print_r($reportViewer->view(__DIR__ . '/data/catalog.xml'));
echo "</pre>";

