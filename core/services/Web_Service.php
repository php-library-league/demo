<?php
/**
* Web_Service
*
* Web service related data
*
* @package      PHP_Library
* @subpackage   Core
* @category     Services
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Services\Web_Service as web_service;
use PHP_Library\Core\Arrangements\Format as format;

$web_service = new web_service('http://php.net/images/logos/elephpant-running-78x48.gif');

$check = $web_service->response(array(
    'no_body' => TRUE,
));

format::pre($check, TRUE);
