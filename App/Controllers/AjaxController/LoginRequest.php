<?php

namespace App\Controllers\AjaxController;

use App\Classes\DataCheck;
use App\Repository\UserCredentialsRepository;

class LoginRequest
{
    public function init() {
        $data = [];
        $check = new DataCheck();

        $data['email'] = $check->require($_POST['email']);
        $data['password'] = $check->require($_POST['password']);
        $userStatus = UserCredentialsRepository::checkUserCredentials($data);

        echo json_encode($userStatus);

    }
}
