<?php
// Realizamos a importação do arquivo de configuração.
require_once __DIR__.'/bootstrap.php';

// Chamamos nosso objeto de view.
echo $twig->render('index.html');