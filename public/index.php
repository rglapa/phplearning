<?php
require "layout/heading.php";
require "layout/footer.php";
$request_uri = $_SERVER['REQUEST_URI'];

$requestPath = strtok($request_uri, "?");

switch ($requestPath) {
    case '/':
        require __DIR__ . '/views/index.view.php';
    break;
    case '/AddClass':
        require __DIR__ . '/jquery_learning/AddClass.php';
    break;
    case '/Hover':
        require __DIR__ . '/jquery_learning/Hover.php';
    break;
    default:
    http_response_code(404);
    require __DIR__ . '/views/404.view.php';
    break;
}