<?php

class caixa extends modelo{
    
    public function inserirCaixa($data_caixa, $descricao_caixa, $valor_caixa, $tipo) {

        $sql = "INSERT INTO caixa SET data = '$data_caixa' , valor = '$valor_caixa', descricao = '$descricao_caixa' , tipo = '$tipo' ";
        $sql = $this->banco->query($sql);
    }

      


        public function selecionarCaixa() {
            $sql = "SELECT * FROM caixa ORDER BY id DESC";
            $sql = $this->banco->query($sql);
            $dados = array();
            //se houver resultados retorna true
            if ($sql->rowCount() > 0) {
                $sql = $sql->fetchAll();
    
                $dados = $sql;
                return $dados;
            }
        }



        public function somaCaixa(){
            $sql = "SELECT SUM(valor)FROM caixa";
            $sql = $this->banco->query($sql);
            $dados = array();
    
            if ($sql->rowCount() > 0) {
                $sql = $sql->fetchAll();
    
                $dados = $sql;
                return $dados;
            }
        }

        public function excluirItemCaixa($excluir) {
            $sql = "DELETE FROM caixa WHERE id = '$excluir' ";
            $sql = $this->banco->query($sql);
        }
      

    }