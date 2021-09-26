<?php
namespace App\Controllers;

use App\Classes\TwigLoader;

class Controller
{
    public static function index()
    {
        self::login();
    }

    public function dashboard() {
        SecurityCheck::secure();
        $_SESSION['role'] == 'owner' ? new Owner\Dashboard : new Customer\Dashboard;
    }

    public function register()
    {
        TwigLoader::load('register.twig');
    }

    public static function login()
    {
        TwigLoader::load("login.twig");
    }

    public function mailConfirmation()
    {
        TwigLoader::load("Email/send-confirmation.twig");
    }
    public function logout() {
        SecurityCheck::logout();
    }
}