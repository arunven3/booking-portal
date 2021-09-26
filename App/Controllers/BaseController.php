<?php

namespace App\Controllers;
use AltoRouter;
use App\Classes\TwigLoader;

class BaseController
{
    protected static $match;

    /**
     * @param AltoRouter $router
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public static function to(AltoRouter $router)
    {
        self::$match = $router->match();

        if (self::$match == false)
        {
            header($_SERVER['SERVER_PROTOCOL'].'404 Not Found');
            TwigLoader::load("error/404.twig");
            exit;
        }
        self::$match["params"] = (!empty(self::$match["params"])) ? self::$match["params"] : [];
        self::handleCommingRequest();
    }

    private static function handleCommingRequest()
    {
        list($controller, $method) = explode("@", self::$match["target"]);
        $dispatcher = new $controller();
        call_user_func([$dispatcher, $method], self::$match["params"]);
    }
}
