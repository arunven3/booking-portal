<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Bootstrap\Doctrine;

const DS = DIRECTORY_SEPARATOR;
$appPath = dirname(__DIR__, 2);
//echo $upOne.DS.'bootstrap' . DS . 'doctrine.php';
require_once $appPath . DS . 'Bootstrap' . DS . 'doctrine.php';

$container = new Doctrine();
$em = $container->getEntityManager();

return ConsoleRunner::createHelperSet($em);