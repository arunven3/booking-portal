<?php

namespace App\Classes;

use Encryption\Encryption;
use Encryption\Exceptions\EncryptionException;

$path = dirname(__DIR__, 2);
require_once $path . DS . 'vendor' . DS . 'autoload.php';
class Token
{

    public static function generate($data, $key)
    {
        try {
            $encryption = Encryption::getEncryptionObject();
            $iv = 'TryToCrackThis..';
            return $encryption->encrypt($data, $key, $iv);
        }
        catch (EncryptionException $e) {
            echo $e;
        }
    }

    public static function get($data, $key)
    {
        try {
            $encryption = Encryption::getEncryptionObject();
            $iv = 'TryToCrackThis..';
            return $encryption->decrypt($data, $key, $iv);
        }
        catch (EncryptionException $e) {
            echo $e;
        }
    }
}