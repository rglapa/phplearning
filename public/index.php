<?php

use Core\Session;
use Core\ValidationException;

const BASE_PATH = __DIR__ . "/../public/";

session_start();

require BASE_PATH . 'layout/heading.php';
require BASE_PATH . 'layout/endheading.php';
require BASE_PATH . 'layout/footer.php';
require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . "Core/functions.php";
require BASE_PATH . 'bootstrap.php';

require BASE_PATH . 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);

    return redirect($router->previousUrl());
}

Session::unflash();
