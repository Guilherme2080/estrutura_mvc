<?php

class caixa extends modelo{
    
    public function inserirCaixa($tipo_empresa, $data_caixa, $data_vencimento, $descricao_caixa, $valor_caixa, $tipo) {

        $sql = "INSERT INTO caixa SET tipo_empresa = '$tipo_empresa', data = '$data_caixa' , data_vencimento = '$data_vencimento', valor = '$valor_caixa', descricao = '$descricao_caixa' , tipo = '$tipo' ";
        $sql = $this->banco->query($sql);
    }
    
    public function inserirCaixaLancamento($tipo_empresa, $data_caixa, $data_vencimento, $descricao_caixa, $valor_caixa, $tipo) {

        $sql = "INSERT INTO lancar_caixa SET tipo_empresa = '$tipo_empresa', data = '$data_caixa' , data_vencimento = '$data_vencimento', valor = '$valor_caixa', descricao = '$descricao_caixa' , tipo = '$tipo' ";
        $sql = $this->banco->query($sql);
    }

    public function inserirLancados($id_lancado) {
    
        $sql = "INSERT INTO caixa(data, data_vencimento, valor, descricao, tipo)
            (SELECT data, data_vencimento, valor, descricao, tipo FROM lancar_caixa WHERE id = '$id_lancado' ) ";

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
        public function selecionarCaixaLancamento() {
            $sql = "SELECT * FROM lancar_caixa ORDER BY id DESC";
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

        public function somaNfeGui(){
            $sql = "SELECT SUM(valor)FROM caixa WHERE tipo = 'nfe' AND tipo_empresa = 'gui'";
            $sql = $this->banco->query($sql);
            $dados = array();
    
            if ($sql->rowCount() > 0) {
                $sql = $sql->fetchAll();
    
                $dados = $sql;
                return $dados;
            }
        }
        
        public function somaNfeNatt(){
            $sql = "SELECT SUM(valor)FROM caixa WHERE tipo = 'nfe' AND tipo_empresa = 'natt'";
            $sql = $this->banco->query($sql);
            $dados = array();
    
            if ($sql->rowCount() > 0) {
                $sql = $sql->fetchAll();
    
                $dados = $sql;
                return $dados;
            }
        }

        public function somaNfeIrani(){
            $sql = "SELECT SUM(valor)FROM caixa WHERE tipo = 'nfe' AND tipo_empresa = 'irani'";
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
        public function excluirItemCaixa_Lanc($excluir_lanc) {
            $sql = "DELETE FROM lancar_caixa WHERE id = '$excluir_lanc' ";
            $sql = $this->banco->query($sql);
        }
      

    }