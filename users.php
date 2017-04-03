<?php 
require_once 'bootstrap.php';
require_once 'src/Employed.php';

$all_employed = $entityManager->getRepository('Employed')->findAll();
$products = array(
    array(
        'code'          => 1,
        'name'          => 'Notebook',
        'description'   => 'Core i7 16GB ran',
        'value'         => 3200.00,
        'date_register' => '2016-10-03',
    ),
    array(
        'code'          => 2,
        'name'          => 'Mouse',
        'description'   => 'Razer',
        'value'         => 829.00,
        'date_register' => '2016-10-03',
    ),
    array(
        'code'          => 2,
        'name'          => 'Teclado Gamer',
        'description'   => 'Razer',
        'value'         => 1250.00,
        'date_register' => '2016-10-03',
    ),
);

foreach ($all_employed as $employed) {	
	$lista = array(
		array(
			'id'		   => $employed->getID(),
		    'name'         => $employed->getName(),
	        'lastname'     => $employed->getLastname(),
	        'cpf'   	   => $employed->getCPF(),
	        'birthday'     => $employed->getBirthday(),	
        )
	);
}
echo $twig->render('employed.html', array( 'employed' => $lista ));
