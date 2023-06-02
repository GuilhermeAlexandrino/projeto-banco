<?php

namespace Banco\Modelo\Conta;

use Banco\Modelo\Autenticavel;
use Banco\Modelo\Pessoa;
use Banco\Modelo\Endereco;
use Banco\Modelo\cpf;

Class Titular extends Pessoa implements Autenticavel
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

    public function podeAutenticar(string $senha)
    {
        return $senha === 'abcd';   
    }

}