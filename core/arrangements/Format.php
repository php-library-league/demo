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
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Arrangements\Format;

$bytes = Format::bytes(715000, TRUE, 2);
Format::pre($bytes, TRUE);

$website = Format::website('google.com');
Format::pre($website);

$text   = '<b>Lorem Ipsum</b> is simply <i>dummy</i> text of the printing and typesetting industry.';
$string = Format::string($text, 0, 50);
Format::pre($string);

Format::pre(Format::number(20.00, FALSE, 1));
Format::pre(Format::price_format(104955.54));
Format::pre(Format::array_to_string(array(
    'csv',
    'txt',
    'php',
), ','));
Format::pre(Format::fullname('John', 'Doe'));
Format::pre(Format::search_wizard('Testing 123', array(
    'field1',
    'field2',
    'field3',
)));
Format::pre(Format::language_value('', 'Police', 'Policija'));
Format::pre(Format::in_wizard('field', array(
    'first',
    'second',
    'third',
)));
