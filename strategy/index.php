<?php
require_once __DIR__ . "/../bootstrap.php";

use strategy\libs\TimedCostStrategy;
use strategy\libs\FixedPriceCostStrategy;
use strategy\libs\Lecture;
use strategy\libs\Seminar;
use strategy\libs\Lesson;

$lessons = [];
$lessons[] = new Lecture(16, new TimedCostStrategy());
$lessons[] = new Seminar(10, new FixedPriceCostStrategy());

foreach ($lessons as $lesson) {
    if ($lesson instanceof Lesson) {
        echo 'Price :' . $lesson->cost() . '<br/>';
        echo 'Charge type:' . $lesson->chargeType() . '<br/>';
    }
}
