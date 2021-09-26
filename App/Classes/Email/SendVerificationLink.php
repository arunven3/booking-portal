<?php


namespace App\Classes\Email;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
USE PHPMailer\PHPMailer\Exception;
use App\Classes\TwigLoader;

$appPath = dirname(__DIR__, 3);
require_once $appPath . DS . 'vendor' . DS . 'autoload.php';

class SendVerificationLink
{
    /**
     * @param $url
     * @return bool
     */
    public static function sendMail($url, $email): bool
    {
        $mailCredentials =  \App\Classes\Email\EmailCredentials::get();
        $body = TwigLoader::getFile('Email/registration.twig', ['link'=> $url]);
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = $mailCredentials['host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $mailCredentials['id'];
            $mail->Password   = $mailCredentials['password'];
            $mail->SMTPSecure = false;
            $mail->Port       = 2525 ;

            $mail->setFrom('testmail@techleague.rf.gd', 'ARUN');
            $mail->addAddress($email, 'Arun');
            $mail->addReplyTo('testmail@techleague.rf.gd', 'Information');

            $mail->isHTML(true);
            $mail->Subject = 'verify Email Address';
            $mail->Body    = $body;
            $mail->AltBody = ' Your registration for the booking portal is completed successful and pending for Email Verification. After verifying Email address you can only able to sign in to your account.use the link to verify your account the link given below copy paste to the browser to complete email verification Thank you. '. $url;

            return $mail->send();
        } catch (Exception $e) {
            return false;
        }
    }
}