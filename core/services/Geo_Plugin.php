<?php
/*
| -------------------------------------------------------------------
| GEO PLUGIN
| -------------------------------------------------------------------
|
| Developing and testing Geo_Plugin class
|
| -------------------------------------------------------------------
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Services\Geo_Plugin as geo_plugin;
use PHP_Library\Core\Arrangements\Format as format;

$geo_plugin = new geo_plugin();
format::pre($geo_plugin->data(), TRUE);
