<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Bootstrap\Doctrine;

const DS = DIRECTORY_SEPARATOR;
$appPath = dirname(__DIR__, 2);

require_once $appPath . DS . 'Bootstrap' . DS . 'doctrine.php';

$doctrine = new Doctrine();
$em = $doctrine->getEntityManager();

return ConsoleRunner::createHelperSet($em);