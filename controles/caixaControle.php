<?php

class caixaControle extends controle {

    public function inicial() {

        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {

                $caixa = new Caixa();

                if(isset($_POST['data_caixa'])){ 

                 
                    if(isset($_POST['lancamento_futuro'])){

                        $data_caixa = addslashes($_POST['data_caixa']);
                        $data_vencimento = addslashes($_POST['data_vencimento']);
                        $descricao_caixa = addslashes($_POST['descricao_caixa']);
                        $valor_caixa = addslashes($_POST['valor_caixa']);
                        $tipo = addslashes($_POST['tipo']);
                        
                        $caixa->inserirCaixaLancamento($data_caixa, $data_vencimento, $descricao_caixa, $valor_caixa, $tipo);
                        

                    } else{

                        $data_caixa = addslashes($_POST['data_caixa']);
                        $data_vencimento = addslashes($_POST['data_vencimento']);
                        $descricao_caixa = addslashes($_POST['descricao_caixa']);
                        $valor_caixa = addslashes($_POST['valor_caixa']);
                        $tipo = addslashes($_POST['tipo']);
                        
                        $caixa->inserirCaixa($data_caixa, $data_vencimento, $descricao_caixa, $valor_caixa, $tipo);
                        
                    }
                
                
                   
                    

                }

                 
                $resultado_caixa = $caixa->selecionarCaixa();
                $resultado_caixa_lancamento = $caixa->selecionarCaixaLancamento();
                 $soma_caixa = $caixa->somaCaixa();

        
        } else {
            
            session_destroy();
            header("Location: " . URL_BASE . "entrar");

        }
      
        $dados = array(
          'resultado_caixa' => @$resultado_caixa,
          'resultado_caixa_lancamento' => @$resultado_caixa_lancamento,
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

            if (isset($_GET['excluir_lanc']) ) {

            
                $excluir_lanc = $_GET['excluir_lanc'];
                
                $caixa->excluirItemCaixa_Lanc($excluir_lanc);

                header("Location: " . URL_BASE . "caixa");
            }

           






            $dados = array(
               
            );


            $this->carregarModelo('caixa', $dados);
        } else {
            header("Location: " . URL_BASE);
        }
    }


    public function lancar() {

        if (isset($_GET['lancar']) ) {

            $caixa = new Caixa();
            $id_lancado = $_GET['lancar'];
            $excluir = $_GET['lancar'];

            $caixa->inserirLancados($id_lancado);   
            $caixa->excluirItemCaixa_Lanc($excluir);

            header("Location: " . URL_BASE . "caixa");
                
            }


                    









            $dados = array(
            
            );
            $this->carregarModelo('caixa', $dados);

    }




}