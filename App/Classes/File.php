<?php


namespace App\Classes;


class File
{
    /**
     * @param $path
     * @return string
     */
    public static function view($path): string
    {
        if(isset($path))
            return APP_URL . DS . 'resources' . DS . 'views' . DS . $path;
    }

    /**
     * @param $path
     * @return string
     */
    public static function assets($path): string
    {
        return APP_URL . DS . 'resources' . DS. 'assets' . DS. $path;
    }

    /**
     * @param $path
     * @return string
     */
    public static function bower($path): string
    {
        return APP_URL . DS . 'resources' . DS . 'assets'.DS . 'bower' . DS . $path;
    }
}