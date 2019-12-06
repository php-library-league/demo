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
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Data\Validation;
use PHP_Library\Core\Arrangements\Format;

Format::pre(Validation::extension(
    '90zlaya.jpeg',
    array('jpeg'),
    'image/jpeg',
    array('image/jpeg')
));

$string = 'Ovo je test NAZIV 12  razmak 34 ima i đĐčćŠ.png';

Format::pre(Validation::rewrite($string));
Format::pre(Validation::rewrite_special($string));
