<?php
/*
| -------------------------------------------------------------------
| DIRECTORY LISTER
| -------------------------------------------------------------------
|
| Developing and testing Directory_Lister class
|
| Please note that this script might get broken if your
| file/folder names start with some of special characters.
| In that case go to Directory_Lister and add them
| to the $forbidden_characters variable.
|
| -------------------------------------------------------------------
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Files\Directory_Lister as directory_lister;
use PHP_Library\Core\Format\Format as format;

$listing = directory_lister::listing(array(
    'directory'  => realpath('../../../outsource/directory_lister/') . DIRECTORY_SEPARATOR,
    'method'     => 'crawl',
    'print'      => FALSE,
    'reverse'    => TRUE,
    'delimiter'  => 'php',
    'date_start' => '01-01',
    'date_end'   => '31-12',
    'years'      => array(2016),
    'types'      => array('png'),
));
format::pre($listing, TRUE);
