<?php
/**
* Temperature
*
* Working with temperature conversions
*
* @package      PHP_Library
* @subpackage   Core
* @category     Numericals
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Numericals\Temperature as temperature;
use PHP_Library\Core\Arrangements\Format as format;

$value = 300.7;

$k_to_c = temperature::k_to_c($value);
$k_to_f = temperature::k_to_f($value);
$f_to_c = temperature::f_to_c($k_to_f['value']);
$f_to_k = temperature::f_to_k($k_to_f['value']);
$c_to_f = temperature::c_to_f($f_to_c['value']);
$c_to_k = temperature::c_to_k($f_to_c['value']);

format::pre($value . ' K is ' . $k_to_c['signed']);
format::pre($value . ' K is ' . $k_to_f['signed']);
format::pre($k_to_f['signed'] . ' is ' . $f_to_c['signed']);
format::pre($k_to_f['signed'] . ' is ' . $f_to_k['signed']);
format::pre($f_to_c['signed'] . ' is ' . $c_to_f['signed']);
format::pre($f_to_c['signed'] . ' is ' . $c_to_k['signed']);
