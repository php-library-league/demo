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
require_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Numericals\Temperature;
use PHP_Library\Core\Arrangements\Format;

$value = 300.7;

$k_to_c = Temperature::k_to_c($value);
$k_to_f = Temperature::k_to_f($value);
$f_to_c = Temperature::f_to_c($k_to_f['value']);
$f_to_k = Temperature::f_to_k($k_to_f['value']);
$c_to_f = Temperature::c_to_f($f_to_c['value']);
$c_to_k = Temperature::c_to_k($f_to_c['value']);

Format::pre($value . ' K is ' . $k_to_c['signed']);
Format::pre($value . ' K is ' . $k_to_f['signed']);
Format::pre($k_to_f['signed'] . ' is ' . $f_to_c['signed']);
Format::pre($k_to_f['signed'] . ' is ' . $f_to_k['signed']);
Format::pre($f_to_c['signed'] . ' is ' . $c_to_f['signed']);
Format::pre($f_to_c['signed'] . ' is ' . $c_to_k['signed']);
