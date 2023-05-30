<?php

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/Cpf.php';

$novaConta = new Conta(new Titular("Guilherme Alexandrino", new Cpf("130.645.606-11")));
$segundaConta = new Conta(new Titular("Nathan Fagundes", new Cpf("123.456.789-10")));
$novaConta->depositar(600);
$novaConta->sacar(100);
$novaConta->transferir($segundaConta, 500);
echo Conta::getNumeroDeContas();
echo $novaConta->getCpfTitular();
echo $novaConta->getNomeTitular();