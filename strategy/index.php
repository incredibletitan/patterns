<?php
require_once __DIR__ . "/../bootstrap.php";

use strategy\libs\TimedCostStrategy;
use strategy\libs\Lecture;

echo (new Lecture(16, new TimedCostStrategy()))->cost();
