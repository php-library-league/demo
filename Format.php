<?php
/*
| -------------------------------------------------------------------
| FORMAT
| -------------------------------------------------------------------
|
| Developing and testing Format class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use phplibrary\Format as format;

$bytes = format::bytes(715000, TRUE, 2);
format::pre($bytes, TRUE);

$website = format::website('google.com');
format::pre($website);

$text   = '<b>Lorem Ipsum</b> is simply <i>dummy</i> text of the printing and typesetting industry.';
$string = format::string($text, 0, 50);
echo $string . '<br/>';

echo format::price_format(104955.54) . '<br/>';

echo format::array_to_string(array('csv', 'txt', 'php'), ',') . '<br/>';

echo format::fullname('John', 'Doe') . '<br/>';

echo format::search_wizard('Testing 123', array('field1', 'field2', 'field3')) . '<br/>';

echo format::language_value('', 'Police', 'Policija') . '<br/><br/>';

format::pre(format::in_wizard('field', array('first', 'second', 'third')));
