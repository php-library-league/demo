<?php
/**
* Index
*
* Printing contents of demo folder
*
* @package      PHP_Library
* @subpackage   Root
* @category     Index
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once __DIR__ . '/../vendor/autoload.php';

use PHP_Library\Core\Files\Directory_Lister;
use PHP_Library\Core\Arrangements\Format;

$listing = Directory_Lister::listing(array(
    'directory' => __DIR__ . DIRECTORY_SEPARATOR,
    'method'    => 'crawl',
    'print'     => FALSE,
    'types'     => array('php'),
));

Format::pre($listing['listing'], FALSE);

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
        $folders            = explode('/', $item['directory']);
        $number_of_folders  = count($folders);
        $penultimate_folder = $folders[$number_of_folders-3];
        $last_folder        = $folders[$number_of_folders-2];

        echo '<li>';
        echo '<a href="';
        echo $penultimate_folder;
        echo '/';
        echo $last_folder;
        echo '/';
        echo $item['file'];
        echo '">';
        echo $item['title'];
        echo '</a>';
        echo '</li>';
    }
}

echo '</ol>';
echo '</body>';
