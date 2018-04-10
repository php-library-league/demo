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

use phplibrary\Format as format;
use phplibrary\Import as import;

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
