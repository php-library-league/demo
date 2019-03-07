<?php
/*
| -------------------------------------------------------------------
| PDO
| -------------------------------------------------------------------
|
| Developing and testing PDO class
|
| -------------------------------------------------------------------
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\SQL\PDO as pdo;
use PHP_Library\Core\Arrangements\Format as format;

$pdo = new pdo();

if ($pdo->has_errors())
{
    format::pre($pdo->get_error());
}
else
{
    $connection = $pdo->get_connection();

    $query     = "SELECT 1 as result;";
    $result    = $connection->query($query);
    $statement = $result->fetch();

    format::pre($statement);
}
