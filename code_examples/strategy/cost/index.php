<?php
require_once __DIR__ . "/../../bootstrap.php";

use strategy\cost\libs\TimedCostStrategy;
use strategy\cost\libs\FixedPriceCostStrategy;
use strategy\cost\libs\Lecture;
use strategy\cost\libs\Seminar;
use strategy\cost\libs\Lesson;

$lessons = [];
$lessons[] = new Lecture(16, new TimedCostStrategy());
$lessons[] = new Seminar(10, new FixedPriceCostStrategy());

foreach ($lessons as $lesson) {
    if ($lesson instanceof Lesson) {
        echo 'Price :' . $lesson->cost() . '<br/>';
        echo 'Charge type:' . $lesson->chargeType() . '<br/>';
    }
}
