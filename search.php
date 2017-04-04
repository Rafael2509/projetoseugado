<?php
require_once 'bootstrap.php';
require_once 'src/Employed.php';
if($_POST['search-by-name'] !== '') {
	$name = trim($_POST['search-by-name']);
	$employed_name = $entityManager->getRepository('Employed')->findBy(array('name' => $name));
	if(count($employed_name) > 0){
		echo $twig->render('employed.html', array( 'employed' => $employed_name));
	}else{
		echo $twig->render('message.html', array( 'content' => 'Employed not found'));
	}
}
if($_POST['search-by-email'] !== '') {
	$email = trim($_POST['search-by-email']);
	$employed_email = $entityManager->getRepository('Employed')->findBy(array('email' => $email));
	if(count($employed_email) > 0){
		echo $twig->render('employed.html', array( 'employed' => $employed_email));
	}else{
		echo $twig->render('message.html', array( 'content' => 'Employed not found'));
	}
}
if($_POST['search-by-cpf'] !== '') {
	$cpf = trim($_POST['search-by-cpf']);
	$employed_cpf = $entityManager->getRepository('Employed')->findBy(array('cpf' => $cpf));
	if(count($employed_cpf) > 0){
		echo $twig->render('employed.html', array( 'employed' => $employed_cpf));
	}else{
		echo $twig->render('message.html', array( 'content' => 'Employed not found'));
	}
}