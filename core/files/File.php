<?php
/*
| -------------------------------------------------------------------
| FILE
| -------------------------------------------------------------------
|
| Developing and testing File class
|
| -------------------------------------------------------------------
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Files\File as file;
use PHP_Library\Core\Arrangements\Format as format;

file::$image = array(
    'location' => 'https://www.dis.rs/images/',
    'default'  => 'download.png',
);

format::pre(file::image('logo.png'));
