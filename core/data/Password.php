<?php
/**
 * Password
 *
 * Works with password related data
 *
 * @package      PHP_Library
 * @subpackage   Core
 * @category     Data
 * @author       Zlatan Stajić <contact@zlatanstajic.com>
 */
require_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Data\Password;
use PHP_Library\Core\Arrangements\Format;

$string = 'T3stPa$$w0r6';

Format::pre(Password::new_unreadable());
Format::pre(Password::new_readable());
Format::pre(Password::strength($string, 80));
Format::pre(Password::encode($string));
Format::pre(Password::decode($string));
Format::pre(Password::digest($string));
