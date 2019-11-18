<?php
/**
* Geo_Plugin
*
* Geography location and other server and browser
* data collected from visitor
*
* @package      PHP_Library
* @subpackage   Core
* @category     Services
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Services\Geo_Plugin as geo_plugin;
use PHP_Library\Core\Arrangements\Format as format;

$geo_plugin = new geo_plugin();
format::pre($geo_plugin->data(), TRUE);
