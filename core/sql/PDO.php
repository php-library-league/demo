<?php
/**
* PDO
*
* Make PDO connection to a database
*
* @package      PHP_Library
* @subpackage   Core
* @category     SQL
* @author       Zlatan Stajić <contact@zlatanstajic.com>
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
