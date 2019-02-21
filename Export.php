<?php
/*
| -------------------------------------------------------------------
| EXPORT
| -------------------------------------------------------------------
|
| Developing and testing Export class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use PHP_Library\League\Files\Export as export;
use PHP_Library\League\Format\Format as format;

export::export_file(array(
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

format::pre(export::allowed_types());
