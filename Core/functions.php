<?php
use Core\Response;
use JetBrains\PhpStorm\NoReturn;

#[NoReturn]
function dd($value): void
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";

    die();
}

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

function base_path($path): mixed
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path("views/" . $path);
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

function old($key, $default = '')
{
    return Core\Session::get('old')[$key] ?? $default;
}