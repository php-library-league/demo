<?php
/*
| -------------------------------------------------------------------
| TEMPERATURE
| -------------------------------------------------------------------
|
| Developing and testing Temperature class
|
| -------------------------------------------------------------------
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Math\Temperature as temperature;
use PHP_Library\Core\Format\Format as format;

$value = 300.7;

$k_to_c = temperature::k_to_c($value);
$k_to_f = temperature::k_to_f($value);
$f_to_c = temperature::f_to_c($k_to_f['value']);
$f_to_k = temperature::f_to_k($k_to_f['value']);
$c_to_f = temperature::c_to_f($f_to_c['value']);
$c_to_k = temperature::c_to_k($f_to_c['value']);

format::pre($value . ' K is ' . $k_to_c['sign']);
format::pre($value . ' K is ' . $k_to_f['sign']);
format::pre($k_to_f['sign'] . ' is ' . $f_to_c['sign']);
format::pre($k_to_f['sign'] . ' is ' . $f_to_k['sign']);
format::pre($f_to_c['sign'] . ' is ' . $c_to_f['sign']);
format::pre($f_to_c['sign'] . ' is ' . $c_to_k['sign']);
