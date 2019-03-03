<?php
/*
| -------------------------------------------------------------------
| PASSWORD
| -------------------------------------------------------------------
|
| Developing and testing Password class
|
| -------------------------------------------------------------------
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Data\Password as password;
use PHP_Library\Core\Format\Format as format;

$string = 'T3stPa$$w0r6';

format::pre(password::new_unreadable());
format::pre(password::new_readable());
format::pre(password::strength($string, 80));
format::pre(password::encode($string));
format::pre(password::decode($string));
format::pre(password::digest($string));
