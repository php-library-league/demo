<?php
/*
| -------------------------------------------------------------------
| OPERATING SYSTEM
| -------------------------------------------------------------------
|
| Developing and testing Operating_System class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use phplibrary\Operating_System as operating_system;
use phplibrary\Format as format;

format::pre(operating_system::get_list());
