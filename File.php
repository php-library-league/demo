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

use phplibrary\File as file;
use phplibrary\Format as format;

file::$image = array(
    'location' => 'https://www.dis.rs/images/',
    'default'  => 'download.png',
);

format::pre(file::image('logo.png'));
