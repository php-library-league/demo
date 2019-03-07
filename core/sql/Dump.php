<?php
/*
| -------------------------------------------------------------------
| DUMP
| -------------------------------------------------------------------
|
| Developing and testing Dump class
|
| -------------------------------------------------------------------
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\SQL\Dump as dump;
use PHP_Library\Core\Arrangements\Format as format;

$command  = 'mysqldump';
$location = 'C:/xampp/mysql/bin/mysqldump.exe';

if (file_exists($location))
{
    $command = $location;
}

$destination = '';
$location    = realpath('../../../outsource/');
$location   .= DIRECTORY_SEPARATOR;

if (file_exists($location))
{
    $destination = $location;
}

$dump = new dump(array(
    'command'     => $command,
    'destination' => $destination,
    'databases'   => array(
        'phpmyadmin',
    ),
));

if ($dump->mysql())
{
    format::pre($dump->get_message());
}
else
{
    format::pre($dump->get_error());
}
