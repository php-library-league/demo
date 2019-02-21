<?php
/*
| -------------------------------------------------------------------
| RANDOM
| -------------------------------------------------------------------
|
| Developing and testing Random class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use PHP_Library\League\Data\Random as random;
use PHP_Library\League\Format\Format as format;

format::pre(random::break_caching());
format::pre(random::generate(4, 'STRING_ADVANCED'));
format::pre(random::element(array(
    array(
        'content'     => "Monday: There's no place like home!",
        'description' => "Tweet",
        'url'         => "https://mobile.twitter.com/elonmusk/status/730592699011604481",
        'attributes'  => "_blank",
    ),
    array(
        'content'     => "Tuesday: There's no place like home!",
        'description' => "Tweet",
        'url'         => "https://mobile.twitter.com/elonmusk/status/730592699011604481",
        'attributes'  => "_blank",
    ),
    array(
        'content'     => "Wednesday: There's no place like home!",
        'description' => "Tweet",
        'url'         => "https://mobile.twitter.com/elonmusk/status/730592699011604481",
        'attributes'  => "_blank",
    ),
    array(
        'content'     => "Thursday: There's no place like home!",
        'description' => "Tweet",
        'url'         => "https://mobile.twitter.com/elonmusk/status/730592699011604481",
        'attributes'  => "_blank",
    ),
    array(
        'content'     => "Friday: There's no place like home!",
        'description' => "Tweet",
        'url'         => "https://mobile.twitter.com/elonmusk/status/730592699011604481",
        'attributes'  => "_blank",
    ),
    array(
        'content'     => "Saturday: There's no place like home!",
        'description' => "Tweet",
        'url'         => "https://mobile.twitter.com/elonmusk/status/730592699011604481",
        'attributes'  => "_blank",
    ),
    array(
        'content'     => "Sunday: There's no place like home!",
        'description' => "Tweet",
        'url'         => "https://mobile.twitter.com/elonmusk/status/730592699011604481",
        'attributes'  => "_blank",
    ),
), 'DAY'));
