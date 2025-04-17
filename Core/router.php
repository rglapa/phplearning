<?php

use JetBrains\PhpStorm\NoReturn;

$routes = require base_path("routes.php");
function routeToController($uri, $routes): void
{
    if (array_key_exists($uri, $routes)) {
        // require can be used as a return for outputting other files
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

#[NoReturn]
function abort($code = 404): void
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
routeToController($uri, $routes);
