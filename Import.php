<?php
/*
| -------------------------------------------------------------------
| IMPORT
| -------------------------------------------------------------------
|
| Developing and testing Import class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use PHP_Library\League\Files\Import as import;
use PHP_Library\League\Format\Format as format;

$file_location = realpath('../outsource/import/example1.xls');
$data          = import::import_data($file_location);

if ($data)
{
    format::pre($data);
}
else
{
    format::pre('No file/data for import.');
}
