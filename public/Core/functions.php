<?php

use Core\Response;
use Core\Session;

/**
 * Dump and die
 * @param mixed $value
 * @return void
 */
function dd($value): void
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";

    die();
}
/**
 * Check if the current URL is the same as the given value
 * @param string $value
 * @return bool
 */
function urlIs($value): bool
{
    return $_SERVER["REQUEST_URI"] === $value;
}

function authorize($condition, $status = RESPONSE::FORBIDDEN): void
{
    if (!$condition) {
        abort($status);
    }
}

/**
 * Get the base path
 * @param string $path
 * @return mixed
 */
function base_path($path): mixed
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path("views/" . $path);
}
/**
 * Get the jquery learning view
 * @param string $path
 * @param array $attributes
 * @return void
 */
function viewJquery($path, $attributes = [])
{
    extract($attributes);
    require base_path("jquery_learning/" . $path);
}

function viewPhp($path, $attributes = [])
{
    extract($attributes);
    require base_path("php_learning/" . $path);
}
/**
 * Redirect to the given path
 * @param string $path
 * @return void
 */
function redirect($path)
{
    header("location: {$path}");
    exit();
}

/**
 * Get the old value
 * @param string $key
 * @param string $default
 * @return string
 */
function old($key, $default = '')
{
    return Session::get('old')[$key] ?? $default;
}
