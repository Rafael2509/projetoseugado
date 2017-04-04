<?php 
require_once 'bootstrap.php';
require_once 'src/Employed.php';
	$action = substr($_POST['button'],0,4);
	$id_employed = substr($_POST['button'],5,strlen($_POST['button']));
	switch ($action) {
		case 'dell':
			$delete = $entityManager->find('Employed', $id_employed);
			$entityManager->remove($delete);
			$entityManager->flush();
			$all_employed = $entityManager->getRepository('Employed')->findAll();

			echo $twig->render('employed.html', array( 'employed' => $all_employed ));
			break;
		case 'edit':
			$edit_employe = $entityManager->find('Employed', $id_employed);
			if($_POST['new-employee-name'] !== ''){
				$edit_employe->SetName($_POST['new-employee-name']);
			}
			if($_POST['new-employee-lastname'] !== ''){
				$edit_employe->setLastname($_POST['new-employee-lastname']);
			}
			if($_POST['new-employee-email'] !== ''){
				$edit_employe->setEmail($_POST['new-employee-email']);
			}
			$entityManager->persist($edit_employe);
			$entityManager->flush();

			$all_employed = $entityManager->getRepository('Employed')->findAll();

			echo $twig->render('employed.html', array( 'employed' => $all_employed ));
			break;

		default:
			echo $twig->render('message.html', array( 'content' => 'Not Found'));
			break;
	}