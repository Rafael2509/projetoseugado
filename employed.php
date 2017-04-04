<?php 
require_once 'bootstrap.php';
require_once 'src/Employed.php';


$all_employed = $entityManager->getRepository('Employed')->findAll();

echo $twig->render('employed.html', array( 'employed' => $all_employed ));
