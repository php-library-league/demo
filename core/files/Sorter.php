<?php
/**
* Sorter
*
* Sortes files to multiple folders
*
* @package      PHP_Library
* @subpackage   Core
* @category     Files
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Files\Sorter;
use PHP_Library\Core\Arrangements\Format;

$destination  = realpath('../../../outsource/sorter/');
$destination .= DIRECTORY_SEPARATOR;
$destination .= 'destination';

if ( ! is_dir($destination))
{
    mkdir($destination);
}

$sorter = new Sorter(array(
    'where_to_read_files'         => realpath('../../../outsource/sorter/source/') . DIRECTORY_SEPARATOR,
    'where_to_create_directories' => realpath('../../../outsource/sorter/destination/') . DIRECTORY_SEPARATOR,
    'number_of_directories'       => 10,
    'folder_sufix'                => '000',
    'operation'                   => 'c',
    'types'                       => array('jpg'),
));

$deploy = $sorter->deploy();
$report = $sorter->report();

Format::pre($report);
