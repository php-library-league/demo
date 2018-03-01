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

file::force_download(
    'Liflet_DIS_Market.pdf',
    'http://www.dis.rs/download/Liflet_DIS_Market.pdf'
);
