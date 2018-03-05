<?php
/*
| -------------------------------------------------------------------
| FILE_VERSION
| -------------------------------------------------------------------
|
| Developing and testing File_Version class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use phplibrary\File_Version as file_version;

file_version::dump(array(
    'file_names' => array(
        'log_files'    => '../outsource/file_version/files',
        'log_versions' => '../outsource/file_version/versions',
    ),
    'listing'    => array(
        'directory'  => 'D:/Zlatan/Browser/phpmailer/',
        'method'     => 'crawl',
    ),
));
