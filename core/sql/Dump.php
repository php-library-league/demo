<?php
/**
 * Dump
 *
 * Dump database from SQL server
 *
 * @package      PHP_Library
 * @subpackage   Core
 * @category     SQL
 * @author       Zlatan Stajić <contact@zlatanstajic.com>
 */
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\SQL\Dump;
use PHP_Library\Core\Arrangements\Format;

$command  = 'mysqldump';
$location = 'C:/xampp/mysql/bin/mysqldump.exe';

if (file_exists($location))
{
    $command = $location;
}

$destination = '';
$location    = __DIR__ . '/../../../outsource/';

if (file_exists($location))
{
    $destination = $location;
}

$dump = new Dump(array(
    'command'     => $command,
    'destination' => $destination,
    'databases'   => array(
        'phpmyadmin',
    ),
));

if ($dump->mysql())
{
    Format::pre($dump->get_message());
}
else
{
    Format::pre($dump->get_error());
}
