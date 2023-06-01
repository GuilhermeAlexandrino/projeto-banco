<?php

namespace Banco\Modelo;

class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {   
        $this->validaNomeTitular($nome); 
        $this->nome = $nome;
        $this->cpf = $cpf;
    }    
    

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf->getCpf();
    }

    protected function validaNomeTitular(string $nome)
    {
        if(strlen($nome) <= 5){
            echo "Seu nome deve ter mais de 5 caracteres";
            exit();
        }
    }
}