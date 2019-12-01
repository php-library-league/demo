<?php
/**
* User_Agent
*
* Working with user agent related data
*
* @package      PHP_Library
* @subpackage   Core
* @category     Data
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once '../../../vendor/autoload.php';

use PHP_Library\Core\Data\User_Agent;
use PHP_Library\Core\Arrangements\Format;

Format::pre(User_Agent::list_browsers(), FALSE);
Format::pre(User_Agent::list_devices(), FALSE);
Format::pre(User_Agent::list_crawlers(), FALSE);

$user_agents = array(
    'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0_3 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A432 Safari/604.1',
    'Mozilla/5.0 (Linux; Android 7.0; SAMSUNG SM-J330F Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/6.2 Chrome/56.0.2924.87 Mobile Safari/537.36',
    'Mozilla/5.0 (Linux; Android 4.4.2; GT-N7100 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.84 Mobile Safari/537.36',
    'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
    'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko',
    'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; rv:11.0) like Gecko',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:55.0) Gecko/20100101 Firefox/55.0',
    'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',
);

foreach ($user_agents as $agent)
{
    echo User_Agent::detect_browser($agent);
    echo '-';
    echo User_Agent::detect_operating_system($agent)['name'];
    echo '-';
    echo User_Agent::detect_device($agent);
    echo '-';
    echo User_Agent::is_mobile($agent) ? 'Mobile' : 'Not mobile';
    echo '-';
    echo User_Agent::is_crawler($agent) ? 'Crawler' : 'Real';
    echo '<br/>';
}
