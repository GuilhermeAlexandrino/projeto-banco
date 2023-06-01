<?php

namespace Banco\Service;

use Banco\Modelo\Funcionario\Funcionario;



class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0;
    
    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacoes()
    {
        return $this->totalBonificacoes;
    }
}