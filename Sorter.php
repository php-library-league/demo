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

$destination  = realpath('../outsource/sorter/');
$destination .= DIRECTORY_SEPARATOR;
$destination .= 'destination';

if ( ! is_dir($destination))
{
    mkdir($destination);
}

$sorter = new sorter(array(
    'where_to_read_files'         => realpath('../outsource/sorter/source/') . DIRECTORY_SEPARATOR,
    'where_to_create_directories' => realpath('../outsource/sorter/destination/') . DIRECTORY_SEPARATOR,
    'number_of_directories'       => 10,
    'folder_sufix'                => '000',
    'operation'                   => 'c',
    'types'                       => array('jpg'),
));

$deploy = $sorter->deploy();
$report = $sorter->report();

format::pre($report);
