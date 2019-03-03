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
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Files\Import as import;
use PHP_Library\Core\Format\Format as format;

$file_location = realpath('../../../outsource/import/example1.xls');
$data          = import::import_data($file_location);

if ($data)
{
    format::pre($data);
}
else
{
    format::pre('No file/data for import.');
}
