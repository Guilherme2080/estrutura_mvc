<?php 
session_start();

require 'config.php';

//processo de procura por classes intanciadas
spl_autoload_register(function($classe){
    
    //verificação se a classe existe na pasta controles
    if(file_exists('controles/'.$classe.'.php')){
        //requero o arquivo
        require 'controles/'.$classe.'.php';
        
    //verificação se a classe existe na pasta modelos 
    }else if (file_exists('modelos/'.$classe.'.php')){
        //requero o arquivo
        require 'modelos/'.$classe.'.php';
        
      //verificação se a classe existe na pasta base   
    } else if(file_exists('base/'.$classe.'.php')){
         //requero o arquivo
        require 'base/'.$classe.'.php';
    }
    
});

// devido o codigo acima é possivel chamar a classe Base
// e o codigo se encarrega de verificar de onde a mesma vem, qual pasta

$base = new Base();
$base->rodar();