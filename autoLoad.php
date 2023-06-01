<?php

spl_autoload_register(function(string $namespaceCompletoDaClasse){
    $caminhoArquivo = str_replace('Banco','src',$namespaceCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .='.php';

    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});