<?php
/*
| -------------------------------------------------------------------
| INDEX
| -------------------------------------------------------------------
|
| Printing contents of demo folder
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use phplibrary\Directory_Lister as directory_lister;

$listing = directory_lister::listing(array(
    'directory'  => realpath('') . DIRECTORY_SEPARATOR,
    'method'     => 'files',
    'print'      => FALSE,
    'types'      => array('php'),
));

echo '<!DOCTYPE html>';
echo '<head>';
echo '<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>';
echo '<title>Demo</title>';
echo '</head>';
echo '<body>';
echo '<h1>Contents of demo folder</h1>';
echo '<ol>';

foreach ($listing['listing'] as $item)
{
    if ( ! in_array($item['title'], array('index')))
    {
        echo '<li>';
        echo '<a href="';
        echo $item['file'];
        echo '">';
        echo $item['title'];
        echo '</a>';
        echo '</li>';
    }
}

echo '</ol>';
echo '</body>';
