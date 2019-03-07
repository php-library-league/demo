<?php
/*
| -------------------------------------------------------------------
| MATH
| -------------------------------------------------------------------
|
| Developing and testing Math class
|
| -------------------------------------------------------------------
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Numericals\Math as math;
use PHP_Library\Core\Arrangements\Format as format;

$percentage = math::percentage(30, 50);
format::pre($percentage);

for ($i=0; $i<10; $i++)
{
    echo math::iterate();
    echo '. ';
    echo math::even_or_odd('first', 'second');
    echo '<br/>';
}

echo '<br/>';
echo 'Number of items: ';
echo math::get_iterator();
echo '<br/>';

math::set_iterator();

echo 'After reset: ';
echo math::get_iterator();
echo '<br/>';
