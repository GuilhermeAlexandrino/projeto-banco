<?php

namespace Banco\Modelo\Funcionario;

use Banco\Modelo\Autenticavel;
use Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel
{

    public function calculaBonificacao()
    {
        return $this->getSalario();
    }

    public function podeAutenticar(string $senha)
    {
        return $senha === '4321';   
    }
}