<?php
/**
* Email
*
* Email-related operations
*
* @package      PHP_Library
* @subpackage   Core
* @category     Arrangements
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Arrangements\Email as email;
use PHP_Library\Core\Arrangements\Format as format;

$email     = 'Contact@ZlatanStajic.com';
$mailto    = email::mailto($email);
$validated = empty(email::validate($email)) ? 'Invalid' : 'Valid';

format::pre($validated, TRUE);
format::pre(email::show($email), TRUE);
format::pre($mailto, TRUE);
