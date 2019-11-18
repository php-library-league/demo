<?php
/**
* Validation
*
* Validation methods
*
* @package      PHP_Library
* @subpackage   Core
* @category     Data
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Data\Validation as validation;
use PHP_Library\Core\Arrangements\Format as format;

format::pre(validation::extension(
    '90zlaya.jpeg',
    array('jpeg'),
    'image/jpeg',
    array('image/jpeg')
));

$string = 'Ovo je test NAZIV 12  razmak 34 ima i đĐčćŠ.png';

format::pre(validation::rewrite($string));
format::pre(validation::rewrite_special($string));
