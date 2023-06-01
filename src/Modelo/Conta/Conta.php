<?php

namespace Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
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
        $tarifaSaque = $valorSaque * $this->percentualTarifa();
        $valorSacado = $valorSaque + $tarifaSaque;
        if ($valorSacado > $this->saldo) {
            echo "Saldo Insuficiente";
            return;
        }

        $this->saldo -= $valorSacado;
    }

    
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas()
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa();
   
}
