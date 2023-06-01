<?php

namespace Banco\Modelo\Conta;

class Conta
{
    private Titular $titular;
    private float $saldo;
    public static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo =  0;
        self::$numeroDeContas++;
    }
    public function __destruct()
    {
        self::$numeroDeContas--;
    
    }
    
    public function depositar(float $valorDeposito): void
    {
        if ($valorDeposito < 0) {
            echo "Valor do Deposito inválido";
            return;
        }
        $this->saldo += $valorDeposito;
    }

    public function sacar(float $valorSaque): void
    {
        if ($valorSaque > $this->saldo) {
            echo "Saldo Insuficiente";
            return;
        }

        $this->saldo -= $valorSaque;
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
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas()
    {
        return self::$numeroDeContas;
    }
}
