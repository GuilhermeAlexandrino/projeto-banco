<?php

namespace Banco\Modelo\Funcionario;
use Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao()
    {
        return $this->getSalario() * 0.05;
    }
}