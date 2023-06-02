<?php

namespace Banco\Modelo\Funcionario;

use Banco\Modelo\Cpf;
use Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    
    private float $salario;


    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        
        $this->salario = $salario;
    }

    public function setNome(string $nome)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
    abstract public function calculaBonificacao();
    

    public function getSalario()
    {
        return $this->salario;
    }
}