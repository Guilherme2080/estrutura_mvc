<?php

class clientes extends modelo {

    //a função que verificará se já existe o email digirado , no banco
    public function verificaLogarCliente($nome) {
        $sql = "SELECT * FROM clientes WHERE nome = '$nome'";
        $sql = $this->banco->query($sql);

        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {

            return true;
        }
    }
  

    
    
    //função responsavel pelo cadastro do usuario
    public function cadastrarCliente($nome, $telefone, $cpf, $endereco, $placa, $observacao) {


        //faz a inserção no banco de dados do nome e senha informados
        $sql = "INSERT INTO clientes SET nome = '$nome' , telefone = '$telefone' , cpf = '$cpf' ,"
                . " endereco = '$endereco' , placa = '$placa' , observacao = '$observacao' ";
        $sql = $this->banco->query($sql);
    }

    //faz a mostragem de todos os clientes cadastrados e retorna o array com os resultados
    public function exibirClientes() {
        $sql = "SELECT * FROM clientes ORDER BY id DESC";
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }

  
  //atualiza os clientes em uma possivel alteração
    public function atualizarClientes($id, $nome, $telefone, $cpf, $endereco, $placa, $observacao) {

        $sql = " UPDATE clientes SET nome = '$nome' , telefone = '$telefone' , cpf = '$cpf', endereco = '$endereco' , placa = '$placa' , observacao = '$observacao'  WHERE id = '$id'";

        $sql = $this->banco->query($sql);
    }
    
    //SELECIONA UM CLIENTE ESPECIFICO REFERENTE AO ID
    public function selecionarClientes($id) {
        $sql = "SELECT * FROM clientes WHERE id = '$id' ";
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $dados = $sql;
            return $dados;
        }
    }

    //SELECIONA UM CLIENTE DE ID ESPECIFICO PARA FAZER A DELEÇÃO
    public function selecionarClientesDel($excluir) {
        $sql = "SELECT * FROM clientes WHERE id = '$excluir' ";
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $dados = $sql;
            return $dados;
        }
    }

    //ONDE ACONTECE A DELEÇÃO PROPRIAMENTE DITA SE O ID BATER
    public function excluirCliente($excluir) {
        $sql = "DELETE FROM clientes WHERE id = '$excluir' ";
        $sql = $this->banco->query($sql);
    }
  

    // --------------------------AQUI É A PARTE DA NOTA DE CADA CLIENTE--------------------------  //
    //FAZ A INSERÇÃO DOS ITENS DA NOTA
   
    
    
       public function inserirNota($nome_produto,  $quantidade, $preco, $id_cliente) {
        
             
        $sql = "INSERT INTO nota SET nome_produto = '$nome_produto' ,"
                . " quantidade = '$quantidade' , preco = '$preco' , id_cliente = '$id_cliente' , data = CURRENT_TIMESTAMP(), valor_total = quantidade * preco ";
        $sql = $this->banco->query($sql);

        $sql = "INSERT INTO nota_historico SET nome_produto = '$nome_produto' ,"
                . "  quantidade = '$quantidade' , preco = '$preco' , id_cliente = '$id_cliente' , data = CURRENT_TIMESTAMP(), valor_total = quantidade * preco ";
        $sql = $this->banco->query($sql);
    }

    
     public function inserirNotaId($id_produto, $nome_produto, $quantidade, $preco, $id_cliente) {
        $sql = "INSERT INTO nota SET nome_produto = '$nome_produto' ,"
                . " quantidade = '$quantidade' , preco = '$preco' ,  id_produto = '$id_produto', id_cliente = '$id_cliente' , data = CURRENT_TIMESTAMP(), valor_total = quantidade * preco ";
        $sql = $this->banco->query($sql);

        $sql = "INSERT INTO nota_historico SET nome_produto = '$nome_produto' ,"
                . " quantidade = '$quantidade' , preco = '$preco', id_cliente = '$id_cliente',data = CURRENT_TIMESTAMP(), valor_total = quantidade * preco ";
        $sql = $this->banco->query($sql);
        
        
         $sql = "UPDATE produtos SET quantidade = quantidade - '$quantidade'  WHERE id = '$id_produto'";
         
        

         $sql = $this->banco->query($sql);
        
    }
    
    
    
    
    public function inserirServico($ver, $preco, $nome_servico_separado) {
           
          $sql = "INSERT INTO mao_de_obra SET valor_servico = '$preco', nome_servico = '$nome_servico_separado', id_cliente = '$ver', data = CURRENT_TIMESTAMP()";
    
          $sql = $this->banco->query($sql);
        
    }
    
    
    
    
    
    
    
    
    
    
   //aqui estou aqui parei 
    public function selecionarServico() {
           
          $sql = "SELECT clientes.nome, clientes.telefone, clientes.id, clientes.placa, clientes.cpf,"
                  . " clientes.endereco, mao_de_obra.valor_servico, mao_de_obra.nome_servico, mao_de_obra.data, clientes.observacao   FROM clientes"
             . "  INNER JOIN mao_de_obra ON mao_de_obra.id_cliente  = clientes.id ORDER BY mao_de_obra.nome_servico ASC";
       

        $sql = $this->banco->query($sql);
        $dados = array();
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
        
    }
    //aqui estou aqui parei 
    
    
    
    
    
    
    
    //FAZ A SELEÇÃO DOS ITENS INSERIDOS NA NOTA FAZENDO INNER JOIN COM A TABELA CLIENTE
    public function verNota($ver) {

        $sql = "SELECT nota.id, nota.data, nota.valor_total, nota.id_produto, nota.nome_produto, nota.quantidade, nota.preco, clientes.nome, clientes.telefone, clientes.placa, clientes.observacao,"
                . " clientes.endereco FROM clientes INNER JOIN nota ON clientes.id = nota.id_cliente WHERE '$ver' = nota.id_cliente ";

        $sql = $this->banco->query($sql);
        $dados = array();
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }

 

    
    
    
    
    
    public function verNotaHistorico($ver) {

        $sql = "SELECT nota_historico.id, nota_historico.data, nota_historico.valor_total, nota_historico.nome_produto, nota_historico.quantidade, nota_historico.preco, clientes.nome, clientes.telefone, clientes.placa, clientes.observacao,"
                . " clientes.endereco FROM clientes INNER JOIN nota_historico ON clientes.id = nota_historico.id_cliente WHERE '$ver' = nota_historico.id_cliente ";

        $sql = $this->banco->query($sql);
        $dados = array();
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }

    //FAZ A ATUALIZACAO DOS ITENS NA NOTA
    public function atualizarNota($id_produto, $nome_produto, $quantidade, $preco, $editar) {

        $sql = "UPDATE nota SET nome_produto = '$nome_produto' , id_produto = '$id_produto' , quantidade = '$quantidade' , preco = '$preco', data = CURRENT_TIMESTAMP() , valor_total = quantidade * preco  WHERE id = '$editar'";

        $sql = $this->banco->query($sql);

        $sql = "UPDATE nota_historico SET nome_produto = '$nome_produto' , id_produto = '$id_produto', quantidade = '$quantidade' , preco = '$preco', data = CURRENT_TIMESTAMP() , valor_total = quantidade * preco  WHERE id = '$editar'";

        $sql = $this->banco->query($sql);
        
         $sql = "UPDATE produtos SET quantidade = quantidade + '$quantidade'  WHERE id = '$id_produto'";

         $sql = $this->banco->query($sql);
        
        
    }

    //SELECIONA UM ITEM ESPECIFICO DA NOTA
    public function selecionarNota($editar) {
        $sql = "SELECT * FROM nota WHERE id = '$editar' ";

        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $dados = $sql;
            return $dados;
        }
    }
    public function selecionarData() {
        $sql = "SELECT data FROM nota";

        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $dados = $sql;
            return $dados;
        }
    }

    //SOMA A COLUNA DO VALOR TOTAL DE CADA CLIENTE
    public function somaGeral($ver){

        $sql = "SELECT SUM(valor_total) AS total_geral FROM nota WHERE id_cliente = $ver ";
        $sql = $this->banco->query($sql);
        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $dados = $sql;
            return $dados;
        }
    }

    
    //SOMA A COLUNA DO VALOR TOTAL DE CADA CLIENTE
    public function somaGeralHistorico($ver) {

        $sql = "SELECT SUM(valor_total) AS total_geral_historico FROM nota_historico WHERE id_cliente = $ver ";
        $sql = $this->banco->query($sql);
        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $dados = $sql;
            return $dados;
        }
    }
    
      public function somaGeralTotal() {

        $sql = "SELECT SUM(valor_total) AS geral FROM nota_historico";
        $sql = $this->banco->query($sql);
        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $dados = $sql;
            return $dados;
        }
    }
    
    
    
    
    //EXCLUI UM ITEM DA NOTA 
    public function excluirItemNota($excluir) {
        
        $sql = "DELETE FROM nota WHERE id = '$excluir' ";
        $sql = $this->banco->query($sql);
    }


    public function excluirTodaNota($excluir_tudo) {
        
        $sql = "DELETE FROM nota WHERE id_cliente = '$excluir_tudo' ";
        $sql = $this->banco->query($sql);
    }
    
    
    

    public function pesquisarCliente($nome_pesquisa) {
        
        $sql = "SELECT * FROM clientes WHERE nome LIKE '%$nome_pesquisa%' OR placa LIKE '%$nome_pesquisa%'";
       // $sql = "SELECT * FROM clientes WHERE nome  LIKE '%$nome_pesquisa%'";
        $sql = $this->banco->query($sql);

        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
     public function pesquisarProdutos($nome_produto) {

        $sql = "SELECT * FROM produtos WHERE nome LIKE '%$nome_produto%' OR referencia LIKE '%$nome_produto%' OR aplicacao LIKE '%$nome_produto%' ";
        $sql = $this->banco->query($sql);

        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
       public function qtdeClientes(){
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
