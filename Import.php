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

$file_location = realpath('../outsource/import/example1.xlsx');
$data = import::import_data($file_location);
if ($data)
{
    echo format::pre($data);    
}
else 
{
    echo 'No file/data for import.';    
}
