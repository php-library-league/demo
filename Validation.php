<?php
/*
| -------------------------------------------------------------------
| VALIDATION
| -------------------------------------------------------------------
|
| Developing and testing Validation class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use phplibrary\Validation as validation;
use phplibrary\Format as format;

format::pre(validation::extension(
    '90zlaya.jpeg',
    array('jpeg'),
    'image/jpeg',
    array('image/jpeg')
));

$string = 'Ovo je test NAZIV 12  razmak 34 ima i đĐčćŠ.png';

format::pre(validation::rewrite($string));
format::pre(validation::rewrite_special($string));
