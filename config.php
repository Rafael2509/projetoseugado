<?php

require_once __DIR__.'/vendor/autoload.php';

require_once __DIR__.'/vendor/fzaninotto/faker/src/autoload.php';
 
$loader = new Twig_Loader_Filesystem(__DIR__.'/views');
 
$twig = new Twig_Environment($loader);