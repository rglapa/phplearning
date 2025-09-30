<?php
<<<<<<< HEAD

use Core\Session;
use Core\ValidationException;
const BASE_PATH = __DIR__ . "/../";

session_start();

require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . "Core/functions.php";
require BASE_PATH . 'bootstrap.php';

$router = new \Core\Router();
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
=======
require_once __DIR__ . '/layout/endheading.php';
require_once __DIR__ . '/layout/footer.php';
require_once __DIR__ . '/layout/heading.php';
require_once __DIR__ . '/router.php';

get('/', 'views/index.view.php');
get('/AddClass', 'jquery_learning/AddClass.php');
get('/Ajax', 'jquery_learning/Ajax.php');
get('/Appending', 'jquery_learning/Appending.php');
get('/Chaining', 'jquery_learning/Chaining.php');
get('/filtering', 'jquery_learning/Filtering.php');
get('/Appending', 'jquery_learning/Appending.php');
get('/ChangeClass', 'jquery_learning/ChangeClass.php');
get('/RemoveClass', 'jquery_learning/RemoveClass.php');
get('/ToggleClass', 'jquery_learning/ToggleClass.php');

any('/404', 'views/404.view.php');
>>>>>>> side_work
