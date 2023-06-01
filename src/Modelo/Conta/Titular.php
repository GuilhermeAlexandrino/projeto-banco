<?php

namespace Banco\Modelo\Conta;

use Banco\Modelo\Pessoa;
use Banco\Modelo\Endereco;
use Banco\Modelo\cpf;

Class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(string $nome,Cpf $cpf, Endereco $endereco)
    {    
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

}