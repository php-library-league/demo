<?php
/**
* Import
*
* Import data from file using customisation of PHPOffice/PhpSpreadsheet
* Location: https://github.com/PHPOffice/PhpSpreadsheet
*
* @package      PHP_Library
* @subpackage   Core
* @category     Files
* @author       Ivan Skokić <iskokic@gmail.com>
*/
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Files\Import;
use PHP_Library\Core\Arrangements\Format;

$file_location = __DIR__ . '/../../../outsource/import/example1.xls';
$data          = Import::import_data($file_location);

if ($data)
{
    Format::pre($data);
}
else
{
    Format::pre('No file/data for import.');
}
