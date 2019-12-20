<?php
/**
* Website
*
* Use when working with website related data
*
* @package      PHP_Library
* @subpackage   Core
* @category     Sites
* @author       Zlatan Stajić <contact@zlatanstajic.com>
*/
include_once __DIR__ . '/../../../vendor/autoload.php';

use PHP_Library\Core\Sites\Website;

/* -------------------------------------------------------------------------- */
/* ---[ Usage ]-------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */

// Instance of Website class
$website = new Website(
    array(
        'name'        => 'PHP Library',
        'host'        => 'http://localhost/_develop/php-library/',
        'made'        => '2017',
        'language'    => 'EN',
        'description' => 'PHP Library is set of classes containing most useful methods and variables for Web Development.',
        'keywords'    => 'php, library, oop, php7',
    )
);

// Adding parameters to head
$website->add_to_head(
    array(
        array(
            'path' => 'custom.css',
            'type' => 'link',
        ),
        array(
            'path' => 'body {background-color: powderblue;}',
            'type' => 'link-custom',
        ),
        array(
            'path' => 'https://php-library.zlatanstajic.com/assets/js/jquery.min.js',
            'type' => 'script',
        ),
        array(
            'path' => 'alert("Head custom script loaded");',
            'type' => 'script-custom',
        ),
    )
);

// Adding parameters to bottom
$website->add_to_bottom(
    array(
        array(
            'path' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
            'type' => 'script',
        ),
        array(
            'path' => 'alert("Bottom custom script loaded");',
            'type' => 'script-custom',
        ),
    )
);

// Adding images to website
$website->add_to_images(
    array(
        'php-logo' => 'https://php-library.zlatanstajic.com/assets/img/phplibrary-logo-blue.png',
    ),
    TRUE
);

/* -------------------------------------------------------------------------- */
/* ---[ Demonstration ]------------------------------------------------------ */
/* -------------------------------------------------------------------------- */

echo '<!DOCTYPE html>';
echo PHP_EOL;
echo '<html>';
echo PHP_EOL;
echo '<head>';
echo PHP_EOL;

// Printing meta
echo $website->meta(array(
    'shortcut_icon' => $website->images('php-logo'),
    'touch_icon'    => $website->images('php-logo'),
));

// Printing head
echo $website->head();

echo '</head>';
echo PHP_EOL;
echo '<body>';
echo PHP_EOL;

// Show name and image
echo '
    <div>
        <h1>Welcome to the ' . $website->get_name() . '</h1>
        <img src="' . $website->images('php-logo') . '">
    </div>
    <br/>
';

if (isset($website->get_server()['referer']))
{
    echo 'You were appointed to this page from: ';
    echo $website->get_server()['referer'];
    echo '<br/>';
}

// Printing bottom
echo $website->bottom();

// Creator signature
echo $website->signature();

// Creator signature for html source
echo $website->signature_hidden();

echo '</body>';
echo PHP_EOL;
echo '</html>';
