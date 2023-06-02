<?php

use Banco\Modelo\Endereco;

require_once 'autoLoad.php';

$umEndereco = new Endereco('contagem','ab','cardeal','999');
$doisEndereco = new Endereco('bh','barro preto','av 1','99');
$tresEndereco = new Endereco('sarzedo','qualquer','sei la','12b');

echo $umEndereco->numero;
