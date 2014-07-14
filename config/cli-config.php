<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\EntityManager;
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap.php';

return ConsoleRunner::createHelperSet($entityManager);