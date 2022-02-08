<?php

class Produtos extends modelo {

    //função responsavel pelo cadastro do produto
    public function cadastrarProduto($nomeimagem , $preco, $preco_compra, $nome, $nome_tecnico, $local, $referencia, $aplicacao, $quantidade, $quantidade_governo, $quantidade_minima, $fornecedor, $fabricante, $categoria) {

        //faz a selecionarDataselecionarDatanserção no banco de dados das informações
        $sql = "INSERT INTO produtos SET preco = '$preco', imagem = '$nomeimagem', preco_compra = '$preco_compra', nome = '$nome', nome_tecnico = '$nome_tecnico', local = '$local', referencia = '$referencia', aplicacao = '$aplicacao', quantidade = '$quantidade', quantidade_governo = '$quantidade_governo', quantidade_minima = '$quantidade_minima', fornecedor = '$fornecedor', fabricante = '$fabricante', categoria = '$categoria', total_produto = preco * quantidade, total_produto_compra = preco_compra * quantidade ";

        $sql = $this->banco->query($sql);
    }

    public function exibirProdutos() {
        $sql = "SELECT * FROM produtos ORDER BY id DESC";        
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }

    
    
    //SELECIONA UM produto ESPECIFICO REFERENTE AO ID
    public function selecionarProdutos($id) {
        $sql = "SELECT * FROM produtos WHERE id = '$id' ";
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $dados = $sql;
            return $dados;
        }
    }
    
      public function selecionarProdutosVer($ver) {
        $sql = "SELECT * FROM produtos WHERE id = '$ver' ";
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $dados = $sql;
            return $dados;
        }
    }
      public function selecionarProdutosGov(){
        $sql = "SELECT * FROM produtos WHERE quantidade_governo > quantidade";
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
      public function selecionarProdutosGovSomaCompra(){
        $sql = "SELECT SUM(preco_compra)* quantidade FROM produtos WHERE quantidade_governo > quantidade"; 
    
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
      public function selecionarProdutosGovSomaVenda(){
        $sql = "SELECT SUM(preco)* quantidade FROM produtos WHERE quantidade_governo > quantidade"; 
    
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }

    
    public function selecionarProdutosMinimo() {
        $sql = "SELECT * FROM produtos WHERE quantidade <= quantidade_minima";        
        
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    public function selecionarProdutosMinimoSomaVenda() {
        $sql = "SELECT SUM(preco) * quantidade FROM produtos WHERE quantidade <= quantidade_minima";        
        
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    public function qtdeItensProdutos(){
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
    public function qtdeItensProdutosMinimo() {
        $sql = "SELECT COUNT(*) FROM produtos WHERE quantidade <= quantidade_minima ";        
        
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    public function qtdeItensProdutosGov() {
        $sql = "SELECT COUNT(*) FROM produtos WHERE quantidade_governo > quantidade";        
        
        $sql = $this->banco->query($sql);
        $dados = array();
        //se houver resultados retorna true
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
    public function selecionarProdutosMinimoSomaCompra() {
        $sql = "SELECT SUM(preco_compra)* quantidade FROM produtos WHERE quantidade <= quantidade_minima";        
        
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
    public function atualizarProdutos($id , $nomeimagem, $preco, $preco_compra, $nome, $nome_tecnico, $local, $referencia, $aplicacao, $quantidade, $quantidade_governo, $quantidade_minima, $fornecedor, $fabricante, $categoria) {

        $sql = "UPDATE produtos SET preco = '$preco', imagem = '$nomeimagem', preco_compra = '$preco_compra', nome = '$nome', nome_tecnico = '$nome_tecnico', local = '$local', referencia = '$referencia', aplicacao = '$aplicacao', quantidade = '$quantidade', quantidade_governo = '$quantidade_governo', quantidade_minima = '$quantidade_minima', fornecedor = '$fornecedor', fabricante = '$fabricante', categoria = '$categoria', total_produto = preco * quantidade, total_produto_compra = preco_compra * quantidade WHERE id = '$id' ";
        
        $sql = $this->banco->query($sql);
        
        
    }

    //SELECIONA UM produto DE ID ESPECIFICO PARA FAZER A DELEÇÃO
    public function selecionarProdutosDel($excluir) {
        $sql = "SELECT * FROM produtos WHERE id = '$excluir' ";
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
    public function excluirProdutos($excluir) {
        $sql = "DELETE FROM produtos WHERE id = '$excluir' ";
        $sql = $this->banco->query($sql);
    }
    
    
    
     public function pesqProdutos($nome_prod){

        $sql = "SELECT * FROM produtos WHERE nome LIKE '%$nome_prod%' OR referencia LIKE '%$nome_prod%' OR aplicacao LIKE '%$nome_prod%' ";
        $sql = $this->banco->query($sql);

        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
     public function somaEstoque(){
        $sql = "SELECT SUM(preco)FROM produtos";
        $sql = $this->banco->query($sql);
        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
    
    
    public function somaTotalProduto(){
        $sql = "SELECT SUM(total_produto)FROM produtos";
        $sql = $this->banco->query($sql);
        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
    public function somaTotalProdutoCompra(){
        $sql = "SELECT SUM(total_produto_compra)FROM produtos";
        $sql = $this->banco->query($sql);
        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
    
    
    
     public function somaQuantidadeProd(){
        $sql = "SELECT SUM(quantidade) FROM produtos";
        $sql = $this->banco->query($sql);
        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }
    
    
    
    
     public function somaEstoqueCompra(){
        $sql = "SELECT SUM(preco_compra)*quantidade FROM produtos";
        $sql = $this->banco->query($sql);
        $dados = array();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetchAll();

            $dados = $sql;
            return $dados;
        }
    }

}
