<?php

define('DS', DIRECTORY_SEPARATOR);
    $baseUrl = dirname(__DIR__, 1);
define('APP_URL', $baseUrl );

require_once APP_URL . DS . "Bootstrap" . DS . "app.php";