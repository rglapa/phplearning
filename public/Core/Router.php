<?php

namespace Core;

use Core\Middleware\Middleware;
use JetBrains\PhpStorm\NoReturn;

class Router
{
    protected $routes = [];

    /**
     * Get the route
     * @param string $uri
     * @param string $controller
     * @return Router
     */
    public function get($uri, $controller)
    {
        return $this->add("GET", $uri, $controller);
    }
    /**
     * Add the route
     * @param string $method
     * @param string $uri
     * @param string $controller
     * @return Router
     */
    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => $method,
            "middleware" => null,
        ];

        return $this;
    }
    /**
     * Add the post route
     * @param string $uri The URI to route the request to
     * @param string $controller The controller to be executed
     * @return Router
     */
    public function post($uri, $controller): Router
    {
        return $this->add("POST", $uri, $controller);
    }

    /**
     * Add the delete route
     * @param string $uri The URI to route the request to
     * @param string $controller The controller to be executed
     * @return Router
     */
    public function delete($uri, $controller): Router
    {
        return $this->add("DELETE", $uri, $controller);
    }

    /**
     * Add the patch route
     * @param string $uri The URI to route the request to
     * @param string $controller The controller to be executed
     * @return Router
     */
    public function patch($uri, $controller): Router
    {
        return $this->add("PATCH", $uri, $controller);
    }

    /**
     * Add the put route
     * @param string $uri The URI to route the request to 
     * @param string $controller The controller to be executed
     * @return Router
     */
    public function put($uri, $controller): Router
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    /**
     * Route the request to the appropriate controller
     * @param string $uri The URI to route the request to
     * @param string $method The HTTP method to route the request with
     * @throws \Exception
     * @return mixed The controller to be executed
     */
    public function route($uri, $method): mixed
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);

                return require base_path('Http/controllers/' . $route['controller']);
            }
        }
        return $this->abort();
    }

    /**
     * Abort the request
     * @param int $code The HTTP status code to abort the request with
     * @return void
     */
    protected function abort($code = 404): void
    {
        http_response_code($code);

        require base_path("views/{$code}.php");

        die();
    }

    public function previousUrl()
    {
        return $_SERVER['HTTP_REFERER'];
    }
}
