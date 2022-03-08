<?php

class caixaControle extends controle {

    public function inicial() {
      
      
       
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {

                $caixa = new Caixa();

                if(isset($_POST['data_caixa'])){  
                        
                    $data_caixa = addslashes($_POST['data_caixa']);
                    $descricao_caixa = addslashes($_POST['descricao_caixa']);
                    $valor_caixa = addslashes($_POST['valor_caixa']);
                    $tipo = addslashes($_POST['tipo']);
                    
                    $caixa->inserirCaixa($data_caixa, $descricao_caixa, $valor_caixa, $tipo);
                    
                   
                }


                 $resultado_caixa = $caixa->selecionarCaixa();
                 $soma_caixa = $caixa->somaCaixa();

               
                  


        } else {
            
            session_destroy();
            header("Location: " . URL_BASE . "entrar");

        }
      
        $dados = array(
          'resultado_caixa' => @$resultado_caixa,
          'soma_caixa' => @$soma_caixa
        );
        //onde é feito o carregamento do visual
        $this->carregarModelo('caixa', $dados);
    }




    public function excluir() {
        
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {
           

            $caixa = new Caixa();

            if (isset($_GET['excluir'])) {

                $excluir = $_GET['excluir'];

                $caixa->excluirItemCaixa($excluir);

                header("Location: " . URL_BASE . "caixa");
            }




            $dados = array(
               
            );


            $this->carregarModelo('caixa', $dados);
        } else {
            header("Location: " . URL_BASE);
        }
    }


}