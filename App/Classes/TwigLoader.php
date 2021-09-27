<?php


namespace App\Classes;
use Twig;

class TwigLoader
{
    /**
     * @param $file
     * @param array $parameter
     */

    public static function loader()
    {
        $loader = new Twig\Loader\FilesystemLoader(APP_URL . DS .'resources' . DS . 'views' . DS .'Layouts');

        $cache = APP_URL . DS . 'bootstrap' . DS . 'cache';
        $twig = new Twig\Environment($loader, ['cache' => $cache]);
        return $twig;
    }

    public static function load($file, $parameter = [])
    {
        $twig = self::loader();

        $twig->display($file, $parameter);

    }

    public static function  getFile($file, $parameter = [])
    {
        $twig = self::loader();

        return $twig->render($file, $parameter);
    }
}