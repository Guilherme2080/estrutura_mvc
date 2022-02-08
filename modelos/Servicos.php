<?php

class servicos extends modelo {

    public function cadastrarServico($nome_carro, $nome_cliente, $placa, $telefone, $data_chegada, $data_saida, $nome_servico, $preco_servico) {

     
        $sql = "INSERT INTO financeiro SET nome_carro = '$nome_carro' , nome_cliente = '$nome_cliente' , placa = '$placa' ,"
                . " telefone = '$telefone' , data_chegada =  CURRENT_TIMESTAMP(), data_saida = CURRENT_TIMESTAMP(), nome_servico = '$nome_servico', preco_servico = '$preco_servico'";
        $sql = $this->banco->query($sql);
    }

  
     public function pesqClienteServ($nome_cliente) {

        $sql = "SELECT * FROM clientes WHERE nome LIKE '%$nome_cliente%' OR telefone LIKE '%$nome_cliente%' OR placa LIKE '%$nome_cliente%' ";
        
        
        
        $sql = $this->banco->query($sql);

        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
    
     public function exibirContas() {
        $sql = "SELECT * FROM financeiro ORDER BY id DESC";
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
     public function selecionarContas($id) {
        $sql = "SELECT * FROM financeiro WHERE id = '$id'";
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $dados = $sql;
            return $dados;
        }
    }
    
       public function atualizarBoleto($id, $nome_carro, $nome_cliente, $placa, $telefone, $data_chegada, $data_saida, $nome_servico, $preco_servico) {

       
              $sql = " UPDATE financeiro SET nome_carro = '$nome_carro' , nome_cliente = '$nome_cliente' , placa = '$placa', telefone = '$telefone', data_chegada = '$data_chegada', data_saida = '$data_saida', nome_servico = '$nome_servico' ,  preco_servico = '$preco_servico' WHERE id = '$id'";

             $sql = $this->banco->query($sql); 
        
           
           
      
    }
    
    
    public function selecionarContasDel($excluir) {
        $sql = "SELECT * FROM financeiro WHERE id = '$excluir' ";
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $dados = $sql;
            return $dados;
        }
    }
    
   
    
    public function excluirConta($excluir) {
        $sql = "DELETE FROM financeiro WHERE id = '$excluir' ";
        $sql = $this->banco->query($sql);
    }

    
}
