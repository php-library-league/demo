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
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Arrangements\Email;
use PHP_Library\Core\Arrangements\Format;

$email     = 'Contact@ZlatanStajic.com';
$mailto    = Email::mailto($email);
$validated = empty(Email::validate($email)) ? 'Invalid' : 'Valid';

Format::pre($validated, TRUE);
Format::pre(Email::show($email), TRUE);
Format::pre($mailto, TRUE);
