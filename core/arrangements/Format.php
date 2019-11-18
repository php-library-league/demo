<?php
/**
* Format
*
* Format related methods
*
* @package      PHP_Library
* @subpackage   Core
* @category     Arrangements
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Arrangements\Format as format;

$bytes = format::bytes(715000, TRUE, 2);
format::pre($bytes, TRUE);

$website = format::website('google.com');
format::pre($website);

$text   = '<b>Lorem Ipsum</b> is simply <i>dummy</i> text of the printing and typesetting industry.';
$string = format::string($text, 0, 50);
format::pre($string);

format::pre(format::number(20.00, FALSE, 1));
format::pre(format::price_format(104955.54));
format::pre(format::array_to_string(array(
    'csv',
    'txt',
    'php',
), ','));
format::pre(format::fullname('John', 'Doe'));
format::pre(format::search_wizard('Testing 123', array(
    'field1',
    'field2',
    'field3',
)));
format::pre(format::language_value('', 'Police', 'Policija'));
format::pre(format::in_wizard('field', array(
    'first',
    'second',
    'third',
)));
