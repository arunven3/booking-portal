<?php


namespace App\Controllers\Email;

use App\Classes\DataCheck;
use App\Classes\TwigLoader;

class ConfirmationEmail
{
    /**
     * @param $email
     */
    public static function verificationLink() {
        $check = new DataCheck();
        $email = $check->require($_POST['email']);
        TwigLoader::load('Email/send-confirmation.twig', ['email' => $email]);
    }
}