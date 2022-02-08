<?php
class produtosControle extends controle{
    
     public function inicial(){
       
                
        if(isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])){
       
           $produtos = new Produtos();  
           
           if (isset($_POST['nome'])) {        
           
            $nomeimagem = addslashes($_POST['nomeimagem']);  
            
            $preco = addslashes($_POST['preco']);
            $preco_compra = addslashes($_POST['preco_compra']);
            $nome = addslashes($_POST['nome']);
            $nome_tecnico = addslashes($_POST['nome_tecnico']);
            $local = addslashes($_POST['local']);
            $referencia = addslashes($_POST['referencia']);
            $aplicacao = addslashes($_POST['aplicacao']);
            $quantidade = addslashes($_POST['quantidade']);
            $quantidade_governo = addslashes($_POST['quantidade_governo']);
            $quantidade_minima = addslashes($_POST['quantidade_minima']);
            $fornecedor = addslashes($_POST['fornecedor']);
            $fabricante = addslashes($_POST['fabricante']);
            $categoria = addslashes($_POST['categoria']);
                      
           
           
            $produtos->cadastrarProduto($nomeimagem, $preco, $preco_compra, $nome, $nome_tecnico, $local, $referencia, $aplicacao, $quantidade, $quantidade_governo, $quantidade_minima, $fornecedor, $fabricante, $categoria);
            
           
           
           } 
          
          


            if(isset($_POST['pesquisa_prod'])){
            
            $nome_prod = $_POST['pesquisa_prod'];
              
            $produtos = new Produtos();
            $produtos->pesqProdutos($nome_prod);
            $pesquisa_prod =  $produtos->pesqProdutos($nome_prod);
            
            
             
              $soma_total_prod = $produtos->somaTotalProduto();           
              $soma_total_prod_compra = $produtos->somaTotalProdutoCompra();
          
            
        }
           
             if(isset($_POST['estoque_minimo'])){
            
                 $produtos = new Produtos();
                 
                 $produtos->selecionarProdutosMinimo();
                 
                 $estoque_minimo =  $produtos->selecionarProdutosMinimo();
                 
               
                 $soma_total_prod = $produtos->somaTotalProduto();           
                 $soma_total_prod_compra = $produtos->somaTotalProdutoCompra();  
                 
                 $total_venda = $produtos->selecionarProdutosMinimoSomaVenda();
                 $total_compra = $produtos->selecionarProdutosMinimoSomaCompra();
                 $total_itens = $produtos->qtdeItensProdutosMinimo();
                 
            
        }
        
            if (isset($_POST['estoque_gov'])) {

                $produtos = new Produtos();
                $estoque_gov = $produtos->selecionarProdutosGov();
                
                
                 $total_venda = $produtos->selecionarProdutosGovSomaVenda();
                 $total_compra = $produtos->selecionarProdutosGovSomaCompra();
                 $total_itens = $produtos->qtdeItensProdutosGov();
                
                
            }

        
           
           
            $produtos->exibirProdutos();
          $exibir_produtos =  $produtos->exibirProdutos();
            
            
            
        } else{
          session_destroy();
          header("Location: ".URL_BASE."entrar");
            
        }
        
          
        
        
        
        
        
           @$arquivo = $_FILES['arquivo']; 
                       
         //o envio da imagem
            if(isset($arquivo['tmp_name'])&& empty($arquivo['tmp_name']) == false){
           
               $nomeimg = $nomeimagem.'.jpg';
               move_uploaded_file($arquivo['tmp_name'], 'midias/imagens/produtos/'.$nomeimg);
                         
            }
            
           
            
            
            
            
        
         
        $dados = array(
            
            'estoque_gov' => @$estoque_gov,
            'soma_total_prod' => @$soma_total_prod,
            'total_itens' => @$total_itens,
            'total_venda' => @$total_venda,           
            'total_compra' => @$total_compra,
            'estoque_minimo' => @$estoque_minimo,
            'pesquisa_prod' => @$pesquisa_prod,
            'exibir' => $exibir_produtos,
            'arquivo' => @$arquivo,
            'nomearquivo' => @$nomearquivo,
            'nomeimagem' => @$nomeimagem
        );
        
        $this->carregarModelo('produtos', $dados);
    }
    
    
    
    public function editar() {
        //trabalhando na edição
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {
           
             $produtos = new Produtos();  
             $produtos->exibirProdutos();
            
            $exibir_produtos =  $produtos->exibirProdutos();


            $id = $_GET['id'];

         
            $produtos->selecionarProdutos($id); 
            $selecionar_produtos = $produtos->selecionarProdutos($id);


            if (isset($_POST['nome'])) {
                
                
            $nomeimagem = addslashes($_POST['nomeimagem']);     
            $preco = addslashes($_POST['preco']);
            $preco_compra = addslashes($_POST['preco_compra']);
            $nome = addslashes($_POST['nome']);
            $nome_tecnico = addslashes($_POST['nome_tecnico']);
            $local = addslashes($_POST['local']);
            $referencia = addslashes($_POST['referencia']);
            $aplicacao = addslashes($_POST['aplicacao']);
            $quantidade = addslashes($_POST['quantidade']);
            $quantidade_governo = addslashes($_POST['quantidade_governo']);
            $quantidade_minima = addslashes($_POST['quantidade_minima']);
            $fornecedor = addslashes($_POST['fornecedor']);
            $fabricante = addslashes($_POST['fabricante']);
            $categoria = addslashes($_POST['categoria']);


                $produtos->atualizarProdutos($id, $nomeimagem, $preco, $preco_compra, $nome, $nome_tecnico, $local, $referencia, $aplicacao, $quantidade, $quantidade_governo , $quantidade_minima , $fornecedor , $fabricante , $categoria);
                header("Location: " . URL_BASE . "produtos");
            }


            if (!isset($_POST['estoque_minimo']) && !isset($_POST['pesquisa_prod']) ) {

                $produtos = new Produtos();
                
                $total_venda = $produtos->somaEstoque();
                $total_compra = $produtos->somaEstoqueCompra();
                $total_itens = $produtos->qtdeItensProdutos();
                $soma_total_prod = $produtos->somaTotalProduto();
                $soma_total_prod_compra = $produtos->somaTotalProdutoCompra();
              
               
                
            }
            
            
            
               @$arquivo = $_FILES['arquivo']; 
                       
         //o envio da imagem
            if(isset($arquivo['tmp_name'])&& empty($arquivo['tmp_name']) == false){
           
               $nomeimg = $nomeimagem.'.jpg';
               move_uploaded_file($arquivo['tmp_name'], 'midias/imagens/produtos/'.$nomeimg);
                         
            }
            
            
            

            $dados = array(
                
                'exibir' => @$exibir_produtos,               
                'total_venda' => @$total_venda,
                'soma_total_prod' => @$soma_total_prod,
                'soma_total_prod_compra'=> @$soma_total_prod_compra,
                'total_compra' => @$total_compra,
                'total_itens' => @$total_itens,
                'id' => @$id,
                'selecionar_produtos' => $selecionar_produtos,
                'arquivo' => @$arquivo,
                'nomearquivo' => @$nomearquivo,
                'nomeimagem' => @$nomeimagem
            );

            $this->carregarModelo('produtos', $dados);
        } else {
            header("Location: " . URL_BASE);
        }
    }
    
    
    
     public function ver() {
        //trabalhando na edição
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {
           
             $ver = $_GET['ver'];
             
             $produtos = new Produtos();  
 
             $produtos->selecionarProdutosVer($ver);
             $produto = $produtos->selecionarProdutosVer($ver);
         



            $dados = array(
           'produto' => $produto
            );

            $this->carregarModelo('ver_produtos', $dados);
        } else {
            header("Location: " . URL_BASE);
        }
    }
    
    
    
    public function excluir() {
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {
         
             $produtos = new Produtos();  
             $produtos->exibirProdutos();
            
            $exibir_produtos =  $produtos->exibirProdutos();

            $excluir = $_GET['excluir'];



            $produtos->selecionarProdutosDel($excluir);
            $selecionar_produtos = $produtos->selecionarProdutosDel($excluir);


            if (isset($_POST['nome'])) {

                $produtos->excluirProdutos($excluir);
                header("Location: " . URL_BASE . "produtos");
            }

 if (!isset($_POST['estoque_minimo']) && !isset($_POST['pesquisa_prod']) ) {

                $produtos = new Produtos();

                $total_venda = $produtos->somaEstoque();
                $total_compra = $produtos->somaEstoqueCompra();
                $total_itens = $produtos->qtdeItensProdutos();
              
               
                
            }


            $dados = array(
                'exibir' => @$exibir_produtos,
                'soma_total_prod' => @$soma_total_prod,
                'soma_total_prod_compra' => @$soma_total_prod_compra,
                'total_venda' => @$total_venda,
                'total_compra' => @$total_compra,
                'total_itens' => @$total_itens,
                'excluir' => @$excluir,
                'selecionar_produtos' => @$selecionar_produtos
            );


            $this->carregarModelo('produtos', $dados);
        } else {
            header("Location: " . URL_BASE);
        }
    }
    
    
}


