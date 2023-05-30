<?php

Class Titular 
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(string $nome,Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }
    public function getNumeroCpf()
    {
        return $this->cpf->getCpf();
    }

    public function getNome()
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nome)
    {
        if(strlen($nome) <= 5){
            echo "Seu nome deve ter mais de 5 caracteres";
            exit();
        }
    }
}