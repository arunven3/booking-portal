<?php

define('appPath', dirname(__DIR__, 3));
const DS = DIRECTORY_SEPARATOR;

require_once appPath . DS . 'vendor' . DS . 'autoload.php';

use Bootstrap\Doctrine;
use Doctrine\DBAL\DriverManager;
use Doctrine\Migrations\Configuration\Connection\ExistingConnection;
use Doctrine\Migrations\Configuration\Migration\ConfigurationArray;
use Doctrine\Migrations\DependencyFactory;
use Doctrine\ORM\Tools\Setup;
use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;

// setup database connection
$conn = DriverManager::getConnection(
    [
        'dbname' => 'booking_portal',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ]
);

// define configurations
$config = new ConfigurationArray([

    'migrations_paths' => [
        'App\Migrations\MigrationVersions' => 'MigrationVersions',
    ],
    'all_or_nothing' => true,
]);

$doctrine = new Doctrine();
$em = $doctrine->getEntityManager();

return DependencyFactory::fromEntityManager($config, new ExistingEntityManager($em));