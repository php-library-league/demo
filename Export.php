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
    'head' => array(
        'Title1',
        'Title2',
    ),
    'data' => array(
        array(
            'title1' => 'Value11',
            'title2' => 'Value12',
        ),
        array(
            'title1' => 'Value21',
            'title2' => 'Value22',
        ),
        array(
            'title1' => 'Value31',
            'title2' => 'Value32',
        ),
    ),
    'type' => 'xlsx',
));

format::pre(export::allowed_types());
