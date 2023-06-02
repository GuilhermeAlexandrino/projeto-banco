<?php

use ContaCorrente;
use Banco\Modelo\Cpf;
use Banco\Modelo\Endereco;
use Banco\Modelo\Conta\Titular;

require_once 'autoLoad.php';

$primeiraConta = new ContaCorrente(new Titular('Guilherme Xavier', new Cpf('130.645.606-11'), 
new Endereco('Contagem','ab','rua cardeal arcoverde', '999') ));

$primeiraConta->depositar(1000);
$primeiraConta->sacar(500);

echo $primeiraConta->getSaldo();