<?php

require_once __DIR__.'/vendor/autoload.php';

require_once __DIR__.'/library/autoload.php';

require_once __DIR__.'/vendor/fzaninotto/faker/src/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/"), $isDevMode);

$conn = array(
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password'=>'kkk9510lpr',
    'dbname'=> 'projetoSeuGado',

); 

$entityManager = EntityManager::create($conn, $config);
 
$loader = new Twig_Loader_Filesystem(__DIR__.'/views');
 
$twig = new Twig_Environment($loader);	