<?php

use Banco\Modelo\Conta\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa()
    {
        return 0.05;      
    }

    public function transferir(Conta $conta, float $valorTransferencia): void
    {
        if ($valorTransferencia > $this->saldo) {
            echo "Saldo Insuficiente";
            return;
        }

        $this->sacar($valorTransferencia);
        $conta->depositar($valorTransferencia);
    }
}