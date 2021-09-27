<?php


namespace App\Controllers\AjaxController;


use App\Classes\DataCheck;
use App\Repository\UserDetailsRepository;

class EditDetailsRequest
{
    public function editUserDetails() {
        $data = [];
        $check = new DataCheck();

        $data['name'] = $check->require($_POST['name']);
        $data['email'] = $check->require($_POST['email']);
        $data['phone'] = $check->require($_POST['phone']);
        $data['password'] = $check->require($_POST['password']);
        $data['updatedDate'] = time();
        $data['mode'] = "edit";

        $registrationStatus = UserDetailsRepository::updateUserDetails($data);
        echo json_encode($registrationStatus);
    }
}