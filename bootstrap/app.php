<?php
require_once APP_URL . DS . "vendor" . DS . "autoload.php";
use App\Controllers\BaseController;

ini_set('session.cookie_httponly', 1);

if (!session_start())
    session_start();

require_once APP_URL . DS . "App" . DS . "Routing" . DS . "MainRouting.php";

BaseController::to($router);