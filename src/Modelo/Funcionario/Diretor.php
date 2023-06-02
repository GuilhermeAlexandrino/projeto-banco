<?php

namespace Banco\Modelo\Funcionario;

use Banco\Modelo\Autenticavel;
use Banco\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao()
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar(string $senha)
    {
        return $senha === '1234';   
    }
}