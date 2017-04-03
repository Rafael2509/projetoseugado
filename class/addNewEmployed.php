<?php
require_once '../bootstrap.php';

$employed = new Employed;

$employed->setName('Rafael');
$employed->setLastname('Souza');
$employed->setCpf('429-940-708-39');
$employed->setEmail('rafael-sousap@hotmail.com');
$employed->setPassword('abc123');
$employed->setBirthday('25/09/1995');
$employed->setTypeUser('A');
$employed->setOccupation(1);
$employed->setActive(1);

$entityManager->persist($employed);

$entityManager->flush();