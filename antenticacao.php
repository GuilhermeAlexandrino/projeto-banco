<?php

use Banco\Modelo\Cpf;
use Banco\Service\Autenticador;
use Banco\Modelo\Funcionario\Diretor;

require_once 'autoLoad.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Karolyne', new Cpf('123.456.789-10'), 10000);

$autenticador->tentaLogin($umDiretor, '1234');