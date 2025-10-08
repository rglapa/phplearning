<?php

namespace Core;

class Session
{
    /**
     * Check if the session value exists
     * @param string $key
     * @return bool
     */
    public static function has($key)
    {
        return (bool) static::get($key);
    }
    /**
     * Get the session value
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? $default;
    }
    /**
     * Flash the session value
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function flash($key, $value)
    {
        $_SESSION['_flash'][$key] = $value;
    }
    /**
     * Unflash the session value
     * @return void
     */
    public static function unflash(): void
    {
        unset($_SESSION['_flash']);
    }
    /**
     * Destroy the session
     * @return void
     */
    public static function destroy()
    {
        static::flush();
        session_destroy();
        $params = session_get_cookie_params();
        setCookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }

    public static function flush()
    {
        $_SESSION = [];
    }
}
