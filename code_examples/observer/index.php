<?php
require_once __DIR__ . '/../bootstrap.php';

$dayBook = new \libs\DayBook();
$dayBook->attach(new \libs\FatherObserver());
$dayBook->attach(new \libs\MotherObserver());
$dayBook->putMark(new \libs\Mark('Math', 5));
