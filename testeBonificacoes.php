<?php

require_once 'autoLoad.php';

use Banco\Modelo\cpf;
use Banco\Modelo\Funcionario\Diretor;
use Banco\Modelo\Funcionario\Gerente;
use Banco\Modelo\Funcionario\Funcionario;
use Banco\Service\ControladorDeBonificacoes;




$umGerente = 
    new Gerente('Guilherme',
    new cpf('130.645.606-11'),3000);

$umDiretor = 
    new Diretor('Lucas Alex',
    new cpf('130.645.606-12'),5000);    

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umGerente);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->getTotalBonificacoes();