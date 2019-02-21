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
include '../vendor/autoload.php';

use PHP_Library\League\Files\File as file;
use PHP_Library\League\Format\Format as format;

file::$image = array(
    'location' => 'https://www.dis.rs/images/',
    'default'  => 'download.png',
);

format::pre(file::image('logo.png'));
