<?php

use Alura\Utility\ArrayUtils;

require_once 'autoload.php';


$correntistas = [
    "Mateus",
    "Joao",
    'Paulo',
    "Carlos",
    "Ana"
];

$saldos = [
    2550,
    4554,
    2300,
    4510,
    1200
];

$comparacao = array_combine($correntistas, $saldos);

$comparacao = ArrayUtils::encontrarPessoasSaldoMaior(2000, $comparacao);

echo "<pre>";
var_dump($comparacao);








