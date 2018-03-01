<?php
/*
| -------------------------------------------------------------------
| SORTER
| -------------------------------------------------------------------
|
| Developing and testing Sorter class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use phplibrary\Sorter as sorter;
use phplibrary\Format as format;

$sorter = new sorter();
$report = $sorter->deploy(array(
    'where_to_read_files'         => 'D:/Zlatan/Browser/sorter/source/',
    'where_to_create_directories' => 'D:/Zlatan/Browser/sorter/destination/',
    'number_of_directories'       => 10,
    'folder_sufix'                => '000',
    'operation'                   => 'c',
    'types'                       => array('jpg'),
));

echo $report['string'];
format::pre($report['array'], TRUE);
