<?php


namespace App\Controllers\Owner;


use App\Classes\TwigLoader;
use App\Repository\PropertiesRepository;
use App\Repository\UserDetailsRepository;

class Dashboard
{
    function __construct()
    {
        $user = [
            'name' => $_SESSION['name']
        ];
        $properties = PropertiesRepository::getPropertyDetails($_SESSION['email']);
        $userDetails = UserDetailsRepository::getUserDetails($_SESSION['email']);

        echo TwigLoader::getFile('Owner/dashboard.twig', [
            'user' => $userDetails,
            'properties' => $properties
        ]);
    }

}