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

use PHP_Library\Core\SQL\PDO;
use PHP_Library\Core\Arrangements\Format;

$pdo = new PDO();

if ($pdo->has_errors())
{
    Format::pre($pdo->get_error());
}
else
{
    $connection = $pdo->get_connection();

    $query     = "SELECT 1 as result;";
    $result    = $connection->query($query);
    $statement = $result->fetch();

    Format::pre($statement);
}
