<?php

$router = new AltoRouter();

$router->map('GET', '/', 'App\Controllers\Controller@index', 'home');
$router->map('POST', '/', 'App\Controllers\Controller@index', 'home2');
$router->map('GET', '/mainstyle', 'App\Controllers\Controller@mainstyle', 'style');


$router->map('GET', '/mainscript', 'App\Controllers\Controller@mainscript', 'script');

$router->map('GET', '/login', 'App\Controllers\Controller@login', 'login');
$router->map('POST', '/login','App\Controllers\AjaxController\LoginRequest@init', 'login-request');
$router->map('GET', '/logout','App\Controllers\Controller@logout', 'logout');

$router->map('GET', '/register','App\Controllers\Controller@register', 'register');
$router->map('POST', '/register','App\Controllers\AjaxController\RegistrationRequest@init', 'registration-request');

$router->map('POST', '/register/property','App\Controllers\AjaxController\RegistrationRequest@property', 'registration-property-request');

$router->map('GET', '/register/confirmation','App\Controllers\AjaxController\RegistrationRequest@confirmEmail', 'email-confirmation-request
');
$router->map('GET', '/confirmation/email','App\Controllers\Controller@mailConfirmation', 'email-confirmation');

$router->map('GET', '/dashboard','App\Controllers\controller@dashboard', 'user-dashboard');

$router->map('POST', '/update/userDetails','App\Controllers\AjaxController\EditDetailsRequest@editUserDetails', 'user-details-edit-request');