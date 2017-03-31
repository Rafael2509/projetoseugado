<?php 

require_once __DIR__.'/../config.php';
 
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
 
// Informamos que iremos utilizar a view products.html e passamos para a view nossa lista de produtos
echo $twig->render('products.html', array( 'products' => $products ) );