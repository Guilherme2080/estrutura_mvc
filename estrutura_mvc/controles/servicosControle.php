<?php

class servicosControle extends controle {

    public function inicial() {


        //SÓ ENTRA CASO EXISTA A SESSÃO 
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {

                  $contas = new Servicos();
                  $clientes = new Clientes();
                  $contas->exibirContas();
                  
                  $lst_contas = $contas->exibirContas();
                  $listar_servicos = $clientes->selecionarServico();  
                   
                  
                  
                  
                  
              if (isset($_POST['nome_carro'])) {                  
                
                $nome_carro = addslashes($_POST['nome_carro']);
                $nome_cliente = addslashes($_POST['nome_cliente']);
                $placa = addslashes($_POST['placa']);
                $telefone = addslashes($_POST['telefone']);
                $data_chegada = addslashes($_POST['data_chegada']);             
                $data_saida = addslashes($_POST['data_saida']);             
                $nome_servico = addslashes($_POST['nome_servico']);             
                $preco_servico = addslashes($_POST['preco_servico']);             
                
                 $contas->cadastrarServico($nome_carro, $nome_cliente, $placa, $telefone, $data_chegada, $data_saida,$nome_servico, $preco_servico);
                  header("Location: " . URL_BASE . "servicos");
                
                } 
         
        
                
            
            

        } else {
            //não existindo sessão destroy ela mesmoassim e redireciona para o inicio
            session_destroy();
            header("Location: " . URL_BASE . "entrar");
        }

        
    
        
        
        $dados = array(
         
            'lista_contas' => @$lst_contas,
            'pesquisa1' => @$pesquisa1,
             'listar_servicos' => $listar_servicos
            
            
        );
        $this->carregarModelo('servicos', $dados);
       
    }

    
   
    
    
    
    
    
    
    
    
    
}