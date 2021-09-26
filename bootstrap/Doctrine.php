<?php

namespace Bootstrap;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;

define('appPath', dirname(__DIR__, 1));
require_once appPath . DS . 'vendor' . DS . 'autoload.php';

class Doctrine
{
    public static function getEntityManager(): EntityManager
    {
        $connection_parameters = [
            'dbname' => 'booking_portal',
            'user' => 'root',
            'password' => '',
            'host' => 'localhost',
            'driver' => 'pdo_mysql'
        ];

        $configuration = Setup::createAnnotationMetadataConfiguration(
            $paths = [appPath . DS . 'App'. DS .'Entities'],
            $isDevMode = true,
            $proxydir = false,
            $cache = null
        );

        $configuration->setEntityNamespaces(array(
            'bookingportal' => '\App\Entities',
        ));

        $driver = new AnnotationDriver(new AnnotationReader(), $paths);
        $configuration->setMetadataDriverImpl($driver);

        return EntityManager::create($connection_parameters, $configuration);
    }
}