<?php
require 'environment.php';

//array criado para conexão que será feita logo abaixo de acordo com as condições
$config = array();

//se estiver desenvolvendo dados do banco local
if(ENVIRONMENT == 'desenvolvimento'){
    //definindo a URL BASE
    define("URL_BASE", "http://localhost/estrutura_mvc/");
    //definindo a variavel criada acima antes do if
    $config['nomebanco'] = 'estrutura_mvc_oficial';
    $config['host'] = 'localhost';
    $config['usuariobanco'] = 'root';
    $config['senhabanco'] = '';
    
}else{
     //definindo a URL BASE
    define("URL_BASE", "http://site.com.br/");
    //aqui no ambiente de produção
    $config['nomebanco'] = 'estrutura_mvc_oficial';
    $config['host'] = 'localhost';
    $config['usuariobanco'] = 'root';
    $config['senhabanco'] = ''; 
}

//tornando acessivel a todo o projeto
global $banco;

try {
    //conexão do banco propriamente dita, de acordo como o que foi atribuido para o array acima
    $banco = new PDO("mysql:dbname=".$config['nomebanco'].";host=".$config['host'],
            $config['usuariobanco'], $config['senhabanco']);
    
}catch (PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}

