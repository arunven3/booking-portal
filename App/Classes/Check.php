<?php

namespace App\Classes;

class Check
{
    /**
     * @param $string
     * @param $action
     * @return string
     */
    public static function token($string, $action): string
    {
        if ($action === "generate")
        {
            $encrypted_string = self::put($string);
            return $encrypted_string;
        }
        elseif ($action === "get")
        {
            $decrypted_string = self::get($string);
            return $decrypted_string;
        }
    }

    /**
     * @return string
     */
    private static function ip(): string
    {
        require_once 'IpGet.php';
        $ip = IpGet::get_ip_address();
        return $ip;
    }

    /**
     * @param $string
     * @return string
     */
    private static function put($string): string
    {
        require_once 'TokenGen.php';
        $ip = self::ip();
        $encrypted_string = TokenGen::enc($string, $ip);
        return $encrypted_string;
    }

    /**
     * @param $encrypted_string
     * @return string
     */
    private static function get($encrypted_string): string
    {
        require_once 'TokenGen.php';
        $ip = self::ip();
        $decrypted_string = TokenGen::dec($encrypted_string, $ip);
        return $decrypted_string;
    }
}