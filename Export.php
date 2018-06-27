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

use phplibrary\Format as format;
use phplibrary\Export as export;

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
    'type'       => 'xls',
));

format::pre(export::allowed_types());
