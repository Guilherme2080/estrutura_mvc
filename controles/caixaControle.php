<?php

class caixaControle extends controle {

    public function inicial() {

        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {

                $caixa = new Caixa();

                if(isset($_POST['data_caixa'])){ 

                 
                    if(isset($_POST['lancamento_futuro'])){

                        
                        $tipo_empresa = addslashes($_POST['tipo_empresa']);
                        $data_caixa = addslashes($_POST['data_caixa']);
                        $data_vencimento = addslashes($_POST['data_vencimento']);
                        $descricao_caixa = addslashes($_POST['descricao_caixa']);
                        $valor_caixa = addslashes($_POST['valor_caixa']);
                        $tipo = addslashes($_POST['tipo']);
                        
                        $caixa->inserirCaixaLancamento($tipo_empresa, $data_caixa, $data_vencimento, $descricao_caixa, $valor_caixa, $tipo);
                        

                    } else{
                        
                        $tipo_empresa = addslashes($_POST['tipo_empresa']);
                        $data_caixa = addslashes($_POST['data_caixa']);
                        $data_vencimento = addslashes($_POST['data_vencimento']);
                        $descricao_caixa = addslashes($_POST['descricao_caixa']);
                        $valor_caixa = addslashes($_POST['valor_caixa']);
                        $tipo = addslashes($_POST['tipo']);
                        
                        $caixa->inserirCaixa($tipo_empresa, $data_caixa, $data_vencimento, $descricao_caixa, $valor_caixa, $tipo);
                        
                    }
                

                }

            
                
                $resultado_caixa = $caixa->selecionarCaixa();
                $resultado_caixa_lancamento = $caixa->selecionarCaixaLancamento();
                $soma_caixa = $caixa->somaCaixa();
                $soma_lanc_fut = $caixa->somaLancFuturo();

                
                $somanfegui = $caixa->somaNfeGui();
                $somanfenatt = $caixa->somaNfeNatt();
                $somanfeirani = $caixa->somaNfeIrani();
                
                
        
        } else {
            
            session_destroy();
            header("Location: " . URL_BASE . "entrar");

        }
      
        $dados = array(

          'resultado_caixa' => @$resultado_caixa,
          'resultado_caixa_lancamento' => @$resultado_caixa_lancamento,
          'soma_caixa' => @$soma_caixa,
          'somanfegui' =>$somanfegui,
          'somanfenatt' =>$somanfenatt,
          'somanfeirani' =>$somanfeirani,
          'soma_lanc_fut' => $soma_lanc_fut
          
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