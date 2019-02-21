<?php
/*
| -------------------------------------------------------------------
| EMAIL
| -------------------------------------------------------------------
|
| Developing and testing Email class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use PHP_Library\League\Format\Email as email;
use PHP_Library\League\Format\Format as format;

$email     = 'Contact@ZlatanStajic.com';
$mailto    = email::mailto($email);
$validated = empty(email::validate($email)) ? 'Invalid' : 'Valid';

format::pre($validated, TRUE);
format::pre(email::show($email), TRUE);
format::pre($mailto, TRUE);
