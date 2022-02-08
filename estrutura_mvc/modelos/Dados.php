<?php

class Dados extends modelo {

       public function qtdProd(){
        $sql = "SELECT COUNT(*) FROM produtos ";        
        
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
      public function totProdCompra(){
        $sql = "SELECT SUM(total_produto_compra)FROM produtos";
        $sql = $this->banco->query($sql);
        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
    public function totProduto(){
        $sql = "SELECT SUM(total_produto)FROM produtos";
        $sql = $this->banco->query($sql);
        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
      public function totClientes(){
        $sql = "SELECT COUNT(*) FROM clientes";        
        
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }

    
    
}


