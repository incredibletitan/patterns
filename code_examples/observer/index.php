<?php
require_once __DIR__ . '/../bootstrap.php';
//Creating a new DayBook
$dayBook = new \libs\DayBook();

//Added listeners of marks in the daybook
$dayBook->attach(new \libs\FatherObserver());
$dayBook->attach(new \libs\MotherObserver());

//Putting mark
$dayBook->putMark(new \libs\Mark('Math', 5));
