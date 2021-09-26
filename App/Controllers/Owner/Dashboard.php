<?php


namespace App\Controllers\Owner;


use App\Classes\TwigLoader;
use App\Repository\PropertiesRepository;

class Dashboard
{
    function __construct()
    {
        $user = [
            'name' => $_SESSION['name']
        ];
        $properties = PropertiesRepository::getPropertyDetails($_SESSION['email']);
        echo TwigLoader::getFile('Owner/dashboard.twig', [
            'user' => $user,
            'properties' => $properties
        ]);
    }

}