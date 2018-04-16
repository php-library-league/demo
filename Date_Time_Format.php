<?php
/*
| -------------------------------------------------------------------
| DATE TIME FORMAT
| -------------------------------------------------------------------
|
| Developing and testing DATE_TIME_FORMAT class
|
| -------------------------------------------------------------------
*/
include '../vendor/autoload.php';

use phplibrary\Date_Time_Format as date_time_format;
use phplibrary\Format as format;

format::pre('Current datetime: ' . date_time_format::current());

$user_date = '08.11.2017 16:07';

format::pre('User date: ' . $user_date);

$database_date = date_time_format::format_to_database($user_date);
$user_date     = date_time_format::format_to_user($database_date);

format::pre('Database date: ' . $database_date);
format::pre('User date: ' . $user_date);

format::pre('User date format: ' . date_time_format::format($user_date, TRUE));
format::pre('Database date format: ' . date_time_format::format($database_date, TRUE));
format::pre('Minutes to hours: ' . date_time_format::minutes_to_hours(61));
format::pre('Hours to minutes: ' . date_time_format::hours_to_minutes('61:55'));
format::pre('Format: ' . date_time_format::format('2017-10-23 15:57:19'));
format::pre('Number to month: ' . date_time_format::number_to_month(date('n'), 'english'));
format::pre('Number to day: ' . date_time_format::number_to_day(date('N'), 'english'));
format::pre('Days before: ' . date_time_format::days_before(7));
format::pre('Days after: ' . date_time_format::days_after(7));
format::pre(date_time_format::get_days('serbian', 3, FALSE));
format::pre(date_time_format::get_months('serbian', 3));
