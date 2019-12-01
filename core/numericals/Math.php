<?php
/**
* Math
*
* Mathematical operations and calculations
*
* @package      PHP_Library
* @subpackage   Core
* @category     Numericals
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Numericals\Math;
use PHP_Library\Core\Arrangements\Format;

$percentage = Math::percentage(30, 50);
Format::pre($percentage);

for ($i=0; $i<10; $i++)
{
    echo Math::iterate();
    echo '. ';
    echo Math::even_or_odd('first', 'second');
    echo '<br/>';
}

echo '<br/>';
echo 'Number of items: ';
echo Math::get_iterator();
echo '<br/>';

Math::set_iterator();

echo 'After reset: ';
echo Math::get_iterator();
echo '<br/>';
