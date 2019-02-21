<?php
/*
| -------------------------------------------------------------------
| WEB SERVICE
| -------------------------------------------------------------------
|
| Developing and testing Web_Service class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use PHP_Library\League\Services\Web_Service as web_service;
use PHP_Library\League\Format\Format as format;

$check_file = web_service::check_file(
    'http://php.net/images/logos/elephpant-running-78x48.gif'
);

format::pre($check_file);
