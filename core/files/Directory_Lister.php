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
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Files\Directory_Lister;
use PHP_Library\Core\Arrangements\Format;

$listing = Directory_Lister::listing(array(
    'directory'  => __DIR__ . '/../../../outsource/directory_lister/',
    'method'     => 'crawl',
    'print'      => FALSE,
    'reverse'    => TRUE,
    'delimiter'  => 'php',
    'date_start' => '01-01',
    'date_end'   => '31-12',
    'years'      => array(2016),
    'types'      => array('png'),
));
Format::pre($listing, TRUE);
