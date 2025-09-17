<?php
define("DIR", __DIR__);
require "layout/heading.php";
require "layout/endheading.php";
require "layout/footer.php";
$request_uri = $_SERVER['REQUEST_URI'];

$requestPath = strtok($request_uri, "?");

switch ($requestPath) {
    case '/':
        require DIR . '/views/index.view.php';
    break;
    case '/AddClass':
        require DIR . '/jquery_learning/AddClass.php';
    break;
    case '/Hover':
        require DIR . '/jquery_learning/Hover.php';
    break;
    case '/Ajax':
        require DIR . '/jquery_learning/Ajax.php';
    break;
    case '/Appending':
        require DIR . '/jquery_learning/Appending.php';
    break;
    case '/Chaining':
        require DIR . '/jquery_learning/Chaining.php';
    break;
    case '/filtering':
        require DIR . '/jquery_learning/Filtering.php';
    break;
    case '/Descendants':
        require DIR . '/jquery_learning/Descendants.php';
    break;
    case '/Dimensions':
        require DIR . '/jquery_learning/Dimensions.html';
    break;
    case '/GetPost':
        require DIR . '/jquery_learning/GetPost.html';
    break;
    case '/JqueryPluginExample':
        require DIR . '/jquery_learning/JqueryPluginExample.html';
    break;
    case '/Not':
        require DIR . '/jquery_learning/Not.php';
    break;
    case '/RemoveClass':
        require DIR . '/jquery_learning/RemoveClass.php';
    break;
    case '/ReplaceElements':
        require DIR . '/jquery_learning/ReplaceElements.html';
    break;
    case '/Abstract':
        require DIR . '/php_learning/Abstract.php';
    break;
    case '/Filters':
        require DIR . '/php_learning/Filters.php';
    break;
    case '/AJAXPoll':
        require DIR . '/php_learning/AJAXPoll.php';
    break;
    default:
        require DIR . '/views/404.view.php';
    break;
}