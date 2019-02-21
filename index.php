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

use PHP_Library\League\Files\Directory_Lister as directory_lister;
use PHP_Library\League\Format\Format as format;

$listing = directory_lister::listing(array(
    'directory' => realpath('') . DIRECTORY_SEPARATOR,
    'method'    => 'crawl',
    'print'     => FALSE,
    'types'     => array('php'),
));

format::pre($listing['listing'], FALSE);

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
