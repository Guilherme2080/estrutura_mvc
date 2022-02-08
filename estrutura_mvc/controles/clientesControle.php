<?php

class clientesControle extends controle {

    public function inicial() {
      

        //CRIA UM OBJETO DO MODEL/MODELO Cliente.php e essa variavel $cliente a recebe
        $clientes = new Clientes();
      
        //SÓ ENTRA CASO EXISTA A SESSÃO 
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {

            //SE EXISTIR O POST NOME SEGUE O PROCESSO DE CADASTRO
            if (isset($_POST['nome'])) {

                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $cpf = addslashes($_POST['cpf']);
                $endereco = addslashes($_POST['endereco']);
                $placa = addslashes($_POST['placa']);
                $observacao = addslashes($_POST['observacao']);

                //SE A FUNÇÃO verificaLogarCliente($nome) RETORNAR FALSO NÃO EXISTE ESSE CADASTRO
                // e PROSSEGUE O CADASTRO
                if ($clientes->verificaLogarCliente($nome) == false) {
                    $clientes->cadastrarCliente($nome, $telefone, $cpf, $endereco, $placa, $observacao);
                    $mensagem = "Cadastrado com sucesso !";
                } else {
                    //caso contrario existe o email cadastrado, retorna apenas a mensagem
                    $mensagem = "Já existe um cadastro com esse email";
                    //echo " já existe ";
                }
            }

            //FAZ A EXIBIÇÃO DOS CLIETES
            $clientes->exibirClientes();

            //A VARIAVEL RECEBE OS RESULTADOS DESSA FUNCAO NO Cliente.php
            $lista_clientes = $clientes->exibirClientes();
        } else {
            //não existindo sessão destroy ela mesmoassim e redireciona para o inicio
            session_destroy();
            header("Location: " . URL_BASE . "entrar");
        }

        //se algo foi digitado no input de pesquisa
        if(isset($_POST['pesquisa'])){
            
            //o que foi pesquisado via post fica salvo na variavel $nome_pesquisa
            $nome_pesquisa = $_POST['pesquisa'];
            
           //Instancia o Modelo Cliente pois é lá que será feito a a pesquisa no banco
            $clientes = new Clientes(); 
            
            //$pesquisa é a variavel que receberá os dados retornados
            //existe o metodo pesquisarCliente() lá no Modelo de Cliente é ele que executa os comandos
            //em SQL lá no arquivo/Classe Clientes.php, 
            //para tal é passado a variavel dos dados digitados $nome_pesquisa
            $pesquisa = $clientes->pesquisarCliente($nome_pesquisa);
          
            
        }
        
        //recebe a quantidade de Clientes, graças a uma consulta no bancorealizada em Clientes.php
        //lá no arquivo o método qtdeClientes() é quem o faz
        $quantidade_clientes = $clientes->qtdeClientes();
 
        
        
       //Esses são todos os dados que estão sendo enviados para o Visual cliente.php
        //É o rsultado de todas operações realizadas anteriormente
        $dados = array(
           
            'quantidade_clientes' => @$quantidade_clientes,           
            'mensagem' => @$mensagem,
            'lista_cliente' => @$lista_clientes,
            'pesquisa' => @$pesquisa
        );
        //onde é feito o carregamento do visual
        $this->carregarModelo('clientes', $dados);
    }

   
 // clientes/editar
    public function editar() {
        //trabalhando na edição
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {
          //instanciando o model Clientes.php
            $clientes = new Clientes();
            //a variavel executa o metodo faz lá no sql no arquivo/classe Clientes.php
            $clientes->exibirClientes();
            
          //os valores são inseridos na variavel $lista_clientes referente a operação 
          //realizada lá no arquivo/classe Clientes.php
            $lista_clientes = $clientes->exibirClientes();


        //para existir edição é preciso identificar algum elemento , recebemos o id que vem via get
       //isso vem lá do visual cliente.php que já puxou do banco e é acrescentado na opção editar
        //na tabela de clientes
            $id = $_GET['id'];


           //executando o comando lá no Modelo Clientes.php
            $clientes->selecionarClientes($id);
            
          //inserindo os valores encontrados na variavel $selecionar_cliente
          //seleciona o cliente cujo o id é o recebidona tabela
            $selecionar_cliente = $clientes->selecionarClientes($id);



            if (isset($_POST['nome'])) {

                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $cpf = addslashes($_POST['cpf']);
                $endereco = addslashes($_POST['endereco']);
                $placa = addslashes($_POST['placa']);
                $observacao = addslashes($_POST['observacao']);


               //comando onde é feita a atualização lá no model/Classe  Clientes.php atualizarClientes()
                $clientes->atualizarClientes($id, $nome, $telefone, $cpf, $endereco, $placa, $observacao);
                header("Location: " . URL_BASE . "clientes");
            }

          //quantidade de clientes operação realizada lá no Clientes.php no model qtdeClientes()
            $quantidade_clientes = $clientes->qtdeClientes();

           //valores resultantes dos comandos realizados no EDITAR
            $dados = array(
                'quantidade_clientes' => @$quantidade_clientes,
                'mensagem' => @$mensagem,
                'lista_cliente' => @$lista_clientes,
                'id' => @$id,
                'selecionar_cliente' => $selecionar_cliente
            );
//O EDITAR É TAMBEM REALIZADO NA PÁGINA DE CLIENTES
            $this->carregarModelo('clientes', $dados);
        } else {
            header("Location: " . URL_BASE);
        }
    }

    
    
    
    
    public function excluir() {
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {
            $clientes = new Clientes();
            $clientes->exibirClientes();
            $lista_clientes = $clientes->exibirClientes();

            $excluir = $_GET['excluir'];



            $clientes->selecionarClientesDel($excluir);
            $selecionar_cliente = $clientes->selecionarClientesDel($excluir);


            if (isset($_POST['nome'])) {

                $clientes->excluirCliente($excluir);
                header("Location: " . URL_BASE . "clientes");
            }




            $dados = array(
                'lista_cliente' => @$lista_clientes,
                'excluir' => @$excluir,
                'selecionar_cliente' => $selecionar_cliente
            );


            $this->carregarModelo('clientes', $dados);
        } else {
            header("Location: " . URL_BASE);
        }
    }

    public function ver() {

        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {

            $clientes = new Clientes();
            $ver = $_GET['ver'];

            $clientes->verNota($ver);

            $clientes->somaGeral($ver);
            $soma_geral = $clientes->somaGeral($ver);
            $soma_geral_historico = $clientes->somaGeralHistorico($ver);


            $nota = $clientes->verNota($ver);
            $nota_historico = $clientes->verNotaHistorico($ver);

            
                       
            if (isset($_POST['nome_produto'])) {

                $id_cliente = addslashes($_GET['ver']);
                $nome_produto = addslashes($_POST['nome_produto']);
                $quantidade = addslashes($_POST['quantidade']);
                $preco = addslashes($_POST['preco']);
               
                 
           
                
                   if(strpos($nome_produto, "servico")!== false) {
                     
                       $nome_servico = explode(".",$nome_produto);
                                         
                      
                       $nome_servico_separado = $nome_servico[1];
                       
                        $precoservico = $preco;                     
                        $clientes->inserirServico($ver, $preco, $nome_servico_separado);
                        
                       
                }
                
                   if(strpos($nome_produto, "serviço")!== false) {
                     $nome_servico = explode(".",$nome_produto);
                                         
                      
                       $nome_servico_separado = $nome_servico[1];
                       
                        $precoservico = $preco;                     
                        $clientes->inserirServico($ver, $preco, $nome_servico_separado);
                        
                        
                       
                }
                  



                if(isset($_POST['id_produto'])){
                    
                            
                      
                    
                    $id_produto = addslashes($_POST['id_produto']);
                   
                     $clientes->inserirNotaId($id_produto, $nome_produto, $quantidade, $preco, $id_cliente);
                
                    header("Location: " . URL_BASE . "clientes/ver?ver=" . $ver);
                } else{
                   
                   $clientes->inserirNota($nome_produto, $quantidade, $preco, $id_cliente);
                   
                   
                   header("Location: " . URL_BASE . "clientes/ver?ver=" . $ver);  
                }

              
               
            }


            
            if(isset($_GET['excluir'])){
             
                
                $excluir = $_GET['excluir'];
                
                 $clientes = new Clientes();
                 
                 $clientes->excluirItemNota($excluir); 
                
                 
                  header("Location: " . URL_BASE . "clientes/ver?ver=" . $ver);
            }
            
            
            
            if (isset($_GET['editar'])) {

                $editar = $_GET['editar'];
                $excluir = $_GET['editar'];

                $clientes = new Clientes();
                $clientes->selecionarNota($editar);
                $exibir_edicao = $clientes->selecionarNota($editar);


                if (isset($_POST['nome_produto_edit'])) {

                    $nome_produto = addslashes($_POST['nome_produto_edit']);
                    $id_produto = addslashes($_POST['id_produto_edit']);
                    $quantidade = addslashes($_POST['quantidade_edit']);
                    $preco = addslashes($_POST['preco_edit']);



                     $clientes->atualizarNota($id_produto, $nome_produto, $quantidade, $preco, $editar);
                     $clientes->excluirItemNota($excluir);

                    header("Location: " . URL_BASE . "clientes/ver?ver=" . $ver);
                }
            }

           

            $arr = range(1, 999999);

            shuffle($arr);
            foreach ($arr AS $each) {
                
            }

            
            $produtos = new Produtos();
            $ver_produtos = $produtos->exibirProdutos();
            
                
            
            if(isset($_POST['pesquisa1'])){
            
            $nome_produto = $_POST['pesquisa1'];
              
            $clientes = new Clientes();
            $clientes->pesquisarProdutos($nome_produto);
            $pesquisa1 =  $clientes->pesquisarProdutos($nome_produto);
          
            
        }
           
          


            $dados = array(
                'ver' => @$ver,
                'nota' => @$nota,
                'nota_historico' => @$nota_historico,
                'editar' => @$editar,
                'exibir_edicao' => @$exibir_edicao,
                'soma_geral' => @$soma_geral,
                'aleatorio' => @$each,
                'ver_produtos' => $ver_produtos,
                'pesquisa1' => @$pesquisa1,
                'excluir' => @$excluir,
                'soma_geral_historico' => $soma_geral_historico,
                'listar_servicos' => @$listar_servicos
             );


          
            
            
            $this->carregarModelo('ver', $dados);
        } else {
            header("Location: " . URL_BASE);
        }
    }

}
