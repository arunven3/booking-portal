<?php


namespace App\Classes\Email;


class EmailCredentials
{
    /**
     * @return string[]
     */
    public static function get(): array
    {
        //only for testing purpose
        return [
            'domain' => 'demohost.online',
            'id' => 'Booking_Portal',
            'password' => 'OTI0Z3V2aG84OHAw',
            'host' => 'mail.smtp2go.com',
            'port' => '2525'
        ];
    }
}