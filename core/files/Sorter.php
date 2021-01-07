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
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Files\Sorter;
use PHP_Library\Core\Arrangements\Format;

$sorter_folder      = __DIR__ . '/../../../outsource/sorter/';
$destination_folder = $sorter_folder . 'demo/';

if ( ! is_dir($destination_folder))
{
    mkdir($destination_folder);
}

$sorter = new Sorter(array(
    'where_to_read_files'         => $sorter_folder . 'source/',
    'where_to_create_directories' => $destination_folder,
    'number_of_directories'       => 10,
    'folder_sufix'                => '000',
    'operation'                   => 'c',
    'types'                       => array('jpg'),
));

$deploy = $sorter->deploy();
$report = $sorter->report();

Format::pre($report);
