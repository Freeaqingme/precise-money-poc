<?php
require __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', '1');
error_reporting(-1);

$eur = new \Money\Currency('EUR');
$money = new \Money\PreciseMoney(0, $eur);

$money = $money->add(new \Money\PreciseMoney('0.1337', $eur));

$money = $money->multiply(1.21);

// Outputs: "0.161777"
var_dump($money->getAmount());