<?php


namespace App\Controllers\AjaxController;

use App\Classes\DataCheck;
use App\Classes\Email\SendVerificationLink;
use App\Classes\Token;
use App\Repository\PropertiesRepository;
use App\Repository\UserDetailsRepository;

class RegistrationRequest
{

    public function init() {
        $data = [];
        $check = new DataCheck();

        $data['name'] = $check->require($_POST['name']);
        $data['email'] = $check->require($_POST['email']);
        $data['phone'] = $check->require($_POST['phone']);
        $data['password'] = $check->require($_POST['password']);
        $data['role'] = $check->require($_POST['role']);
        $data['createdDate'] = time();
        $data['mode'] = "create";

        $token = Token::generate($data['email'], 'somekeytext');

        $url = 'bookingportal/register/confirmation?code='. $token;
        $mail = SendVerificationLink::sendMail($url, $data['email']);

        $registrationStatus = UserDetailsRepository::updateUserDetails($data);

        echo json_encode($registrationStatus);
    }

    public function confirmEmail()
    {
        $email = Token::get($_GET['code'], 'somekeytext');

        if (UserDetailsRepository::updateVerified($email))
        {
            echo 'Email Account Verified Successful';
        }
        else
        {
            echo 'Unable to verify your account try again later';
        }
    }

    public function property ()
    {
        $data = [];
        $check = new DataCheck();

        $data['name'] = $check->require($_POST['name']);
        $data['email'] = $_SESSION['email'];
        $data['size'] = $check->require($_POST['size']);
        $data['type'] = $check->require($_POST['type']);
        $data['description'] = $check->require($_POST['description']);
        $data['address'] = $check->require($_POST['address']);
        $data['longitude'] = $check->require($_POST['longitude']);
        $data['latitude'] = $check->require($_POST['latitude']);
        $data['createdDate'] = time();

        $registrationStatus = PropertiesRepository::updatePropertyDetails($data);

        echo json_encode($registrationStatus);
    }
}