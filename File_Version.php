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
        'log_files'    => realpath('../outsource/') . DIRECTORY_SEPARATOR . 'files',
        'log_versions' => realpath('../outsource/') . DIRECTORY_SEPARATOR . 'versions',
    ),
    'listing'    => array(
        'directory' => realpath('../outsource/sorter/') . DIRECTORY_SEPARATOR,
        'method'    => 'crawl',
    ),
));
