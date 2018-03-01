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
include '../vendor/autoload.php';

use phplibrary\Password as password;
use phplibrary\Format as format;

$string = 'T3stPa$$w0r6';

format::pre(password::new_unreadable());
format::pre(password::new_readable());
format::pre(password::strength($string, 80));
format::pre(password::encode($string));
format::pre(password::decode($string));
