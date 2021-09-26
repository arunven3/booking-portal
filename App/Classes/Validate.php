<?php

namespace App\Classes;

class Validate
{
    /**
     * @param $text
     * @return bool
     */
    public static function textlength($text): bool
    {
        if (isset($text)){
            $len=strlen($text);

            if ($len < 21)
                return true;
            elseif ($len >21 )
                return false;
        }
    }

    /**
     * @param $password
     * @return string
     */
    public static function password($password): string
    {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        $errorMessage='Password';

        if(!$uppercase)
            $errorMessage = $errorMessage.' Have atleast one UpperCase , ';

        if(!$lowercase)
            $errorMessage = $errorMessage. '  Have atleast one LowerCase , ';

        if(!$number)
            $errorMessage = $errorMessage. '  Have atleast one Number , '  ;

        if(!$specialChars)
            $errorMessage = $errorMessage. '  Have atleast one Symbol , ';

        if(strlen($password) < 10)
            $errorMessage = $errorMessage. 'Password should be at least 10 characters in length ';

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 10)
        {
            return $errorMessage;
        }
        else
        {
            return 'success';
        }
    }
}