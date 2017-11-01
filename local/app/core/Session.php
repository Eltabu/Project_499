<?php 
class Session
{
    public static function int()
    {
        @SESSION_START();
    }
    
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    
    public static function get($key)
    {
        return $_SESSION[$key];
    }

    public static function destroy()
    {
        SESSION_DESTROY(); //when should I destroy the session
    }
}