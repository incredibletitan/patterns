<?php
require_once __DIR__ . "/../../bootstrap.php";

use strategy\questions\libs\Question;
use strategy\questions\libs\RegexpMarker;
use strategy\questions\libs\MatchMarker;
use strategy\questions\libs\MarkLogicMarker;

$markers = [
    new RegexpMarker('/.s/'),
    new MarkLogicMarker('ok'),
    new MatchMarker('ok')
];

foreach ($markers as $marker) {
    echo get_class($marker) . " : " . ((new Question('How are you do?', $marker))->mark('ok') ? 'ok' : 'fail');
}
