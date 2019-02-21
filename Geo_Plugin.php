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
include '../vendor/autoload.php';

use PHP_Library\League\Data\Geo_Plugin as geo_plugin;
use PHP_Library\League\Format\Format as format;

$geo_plugin = new geo_plugin();
format::pre($geo_plugin->data(), TRUE);
