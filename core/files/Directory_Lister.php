<?php
/**
* Directory_Lister
*
* Directory content retrieval
*
* @package      PHP_Library
* @subpackage   Core
* @category     Files
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Files\Directory_Lister as directory_lister;
use PHP_Library\Core\Arrangements\Format as format;

$listing = directory_lister::listing(array(
    'directory'  => realpath('../../../outsource/directory_lister/') . DIRECTORY_SEPARATOR,
    'method'     => 'crawl',
    'print'      => FALSE,
    'reverse'    => TRUE,
    'delimiter'  => 'php',
    'date_start' => '01-01',
    'date_end'   => '31-12',
    'years'      => array(2016),
    'types'      => array('png'),
));
format::pre($listing, TRUE);
