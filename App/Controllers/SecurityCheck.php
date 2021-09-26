<?php


namespace App\Controllers;

class SecurityCheck
{

    /**
     * @return bool
     */
    public static function secureCheck(): bool
    {
        return isset($_SESSION['token']) && $_SESSION['token'] == 'generated';

    }

    public static function secure()
    {
        if (! (isset($_SESSION['token']) && $_SESSION['token'] == 'generated'))
        {
            header('Location: /');
        }
    }

    public static function logout()
    {
        $_SESSION['token'] = null;
        session_destroy();
        header('Location: /');
    }
}