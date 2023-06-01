<?php

require_once 'autoLoad.php';

use Banco\Modelo\Conta\Titular;
use Banco\Modelo\Endereco;
use Banco\Modelo\cpf;
use Banco\Modelo\Conta\Conta;




$endereco1 = new Endereco ("Contagem","AB","Rua Cardeal Arcoverde","999");
$novaConta = new Conta(new Titular("Guilherme Alexandrino", new Cpf("130.645.606-11"),$endereco1));
$segundaConta = new Conta(new Titular("Nathan Fagundes", new Cpf("123.456.789-10"),$endereco1));
$novaConta->depositar(600);
$novaConta->sacar(100);
$novaConta->transferir($segundaConta, 500);
echo Conta::getNumeroDeContas();

