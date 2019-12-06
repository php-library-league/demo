<?php
/**
* Export
*
* Export files using customisation of PHPOffice/PhpSpreadsheet
* Location: https://github.com/PHPOffice/PhpSpreadsheet
*
* @package      PHP_Library
* @subpackage   Core
* @category     Files
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Files\Export;
use PHP_Library\Core\Arrangements\Format;

Export::export_file(array(
    'data_types' => array(
        array(
            'index' => 0,
            'type'  => 'TEXT',
        ),
    ),
    'head'       => array(
        'Title',
        'Number',
    ),
    'data'       => array(
        array(
            'title'  => 'Value11',
            'number' => '301234',
        ),
        array(
            'title'  => 'Value21',
            'number' => '852741963001',
        ),
        array(
            'title'  => 'Value31',
            'number' => '22.56',
        ),
    ),
    'type'       => 'xlsx',
));

Format::pre(Export::allowed_types());
