<?php
/**
* Random
*
* Random-related data
*
* @package      PHP_Library
* @subpackage   Core
* @category     Data
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Data\Random;
use PHP_Library\Core\Arrangements\Format;

Format::pre(Random::break_caching());
Format::pre(Random::generate(4, 'STRING_ADVANCED'));
Format::pre(Random::element(array(
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
