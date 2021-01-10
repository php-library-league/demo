<?php
/**
 * Date_Time_Format
 *
 * Date and Time formating, validating, comparing, converting...
 *
 * @package      PHP_Library
 * @subpackage   Core
 * @category     Arrangements
 * @author       Zlatan Stajić <contact@zlatanstajic.com>
 */
require_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Arrangements\Date_Time_Format;
use PHP_Library\Core\Arrangements\Format;

Format::pre('Current datetime: ' . Date_Time_Format::current());

$user_date = '08.11.2017 16:07';

Format::pre('User date: ' . $user_date);

$database_date = Date_Time_Format::format_to_database($user_date);
$user_date     = Date_Time_Format::format_to_user($database_date);

Format::pre('Database date: ' . $database_date);
Format::pre('User date: ' . $user_date);

Format::pre('User date format: ' . Date_Time_Format::format($user_date, TRUE));
Format::pre('Database date format: ' . Date_Time_Format::format($database_date, TRUE));
Format::pre('Minutes to hours: ' . Date_Time_Format::minutes_to_hours(61));
Format::pre('Hours to minutes: ' . Date_Time_Format::hours_to_minutes('61:55'));
Format::pre('Format: ' . Date_Time_Format::format('2017-10-23 15:57:19'));
Format::pre('Number to month: ' . Date_Time_Format::number_to_month(date('n'), 'english'));
Format::pre('Number to day: ' . Date_Time_Format::number_to_day(date('N'), 'english'));
Format::pre('Days before: ' . Date_Time_Format::days_before(7));
Format::pre('Days after: ' . Date_Time_Format::days_after(7));
Format::pre(Date_Time_Format::get_days('serbian', 3, FALSE));
Format::pre(Date_Time_Format::get_months('serbian', 3));
