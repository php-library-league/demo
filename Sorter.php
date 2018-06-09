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

$sorter = new sorter();
$report = $sorter->deploy(array(
    'where_to_read_files'         => realpath('../outsource/sorter/source/') . DIRECTORY_SEPARATOR,
    'where_to_create_directories' => realpath('../outsource/sorter/destination/') . DIRECTORY_SEPARATOR,
    'number_of_directories'       => 10,
    'folder_sufix'                => '000',
    'operation'                   => 'c',
    'types'                       => array('jpg'),
));

format::pre($report['string']);
format::pre($report['array'], TRUE);
format::pre(sorter::multidimensional_array(array(
    array(
        99,
        58,
        12,
    ),
    array(
        25,
        10,
        11,
    ),
    array(
        11,
        25,
        70,
    ),
), 2, SORT_DESC));
