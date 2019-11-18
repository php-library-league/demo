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
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Files\Import as import;
use PHP_Library\Core\Arrangements\Format as format;

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
