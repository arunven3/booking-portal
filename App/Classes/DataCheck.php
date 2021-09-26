<?php

namespace App\Classes;

class DataCheck
{
    /**
     * @param $data
     * @return string
     */
    public static function require($data): string
    {
        $data = strip_tags($data);
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        if (strlen($data) <= 0)
        {
            $error = [
                'error' => true,
                'message' => 'Please give datas to all required fields'
            ];

            echo $data;
            die(json_encode($error));
        }

        return $data;
    }
}