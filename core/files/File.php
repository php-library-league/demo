<?php
/**
 * File
 *
 * File-related operations
 *
 * @package      PHP_Library
 * @subpackage   Core
 * @category     Files
 * @author       Zlatan Stajić <contact@zlatanstajic.com>
 */
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Files\File;
use PHP_Library\Core\Arrangements\Format;

File::$image = array(
    'location' => 'https://raw.githubusercontent.com/php-library-league/assets/1.0.0/img/',
    'default'  => 'phplibrary-logo-blue.png',
);

Format::pre(File::image('logo.png'));
