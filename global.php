<?php
require_once 'bootstrap.php';
require_once 'src/Employed.php';
require_once 'src/Occupation.php';
$verify_cpf = $entityManager->getRepository('Employed')->findOneBy(array('cpf' => $_POST["CPF"]));
$verify_email = $entityManager->getRepository('Employed')->findOneBy(array('email' => $_POST["email"]));
if ($verify_cpf === NULL && $verify_email === NULL){
	if(isset($_POST["company"]) && isset($_POST['telphone']) && isset($_POST['responsibility'])
	&& isset($_POST['start_date']) ){
		$occupation = new Occupation;
		
		$occupation->setCompany($_POST['company']);
		$occupation->setTelphone($_POST['telphone']);
		$occupation->setResponsibility($_POST['responsibility']);

		if(isset($_POST['description'])){
			$occupation->setDescription($_POST['description']);
		}

		$start_date = date('Y-m-d', strtotime($_POST['start_date']));
		
		$occupation->setStart_date($start_date);

		if(isset($_POST['finish_date'])){		
			$finish_date = date('Y-m-d', strtotime($_POST['finish_date']));
			$occupation->setFinishdate($finish_date);
		}
		if(isset($_POST['current'])){
			$current = $_POST['current'];
			if($current != 1)
			{
				$current = 0;
			}
		}
		$occupation->setCurrent($current);

		$occupation->setActive($_POST['active']);

		$entityManager->persist($occupation);

		$entityManager->flush();

		$id_occupation = $occupation->getOccupation();
	
		if (isset($_POST["CPF"]) && isset($_POST["name"]) && isset($_POST["lastname"]) &&
		isset($_POST["email"]) && isset($_POST["password"])) {

			$employed = new Employed();

			$employed->setName($_POST["name"]);
			$employed->setLastname($_POST["lastname"]);
			$employed->setCpf($_POST["CPF"]);
			$employed->setEmail($_POST["email"]);
			$employed->setPassword($_POST["password"]);
			$employed->setTypeUser($_POST["type_user"]);

			if(isset($_POST['birthday'])){		
				$birthday = date('Y-m-d', strtotime($_POST['birthday']));
				$employed->setBirthday($birthday);
			}

			$employed->setOccupation($id_occupation);
			$employed->setActive($_POST["active"]);

			$entityManager->persist($employed);
			$entityManager->flush();
		}else{
			echo $twig->render('message.html', array( 'content' => 'Fill in the data correctly'));
		}
		echo $twig->render('message.html', array( 'content' => 'Your record was successfully saved'));
	}else{
		echo $twig->render('message.html', array( 'content' => 'Fill in the data correctly'));
	}	
}else{	
	echo $twig->render('message.html', array( 'content' => 'E-mail or CPF is already in our database'));
}



