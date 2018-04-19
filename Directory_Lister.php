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
| In that case go to Directory_Lister class and add them
| to the $forbidden_characters variable.
|
| To enable local file links you should use some kind of browser extension:
| Firefox: https://addons.mozilla.org/en-US/firefox/addon/local-filesystem-links/
| Chrome: https://chrome.google.com/webstore/detail/enable-local-file-links/nikfmfgobenbhmocjaaboihbeocackld
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use phplibrary\Directory_Lister as directory_lister;
use phplibrary\Format as format;

$listing = directory_lister::listing(array(
    'directory'  => realpath('../outsource/directory_lister/') . DIRECTORY_SEPARATOR,
    'method'     => 'crawl',
    'print'      => FALSE,
    'display'    => FALSE,
    'reverse'    => TRUE,
    'delimiter'  => 'php',
    'date_start' => '01-01',
    'date_end'   => '31-12',
    'years'      => array(2016),
    'types'      => array('png'),
));
format::pre($listing, TRUE);
