<?php
//esse arquivo é um auxiliador para realizar a conexão com o banco extendendo essa classe  nos models
// extendendo nos modelos
class Modelo{
   //variavel protegida
    protected $banco;
    //o model construtor o primeiro a ser executado
    public function __construct() {
       
        //puxando o banco criado no config.php
        global $banco;
        //onde se usar $this->banco se equivale a $banco onde contem a conexão
        $this->banco = $banco;
    }
}