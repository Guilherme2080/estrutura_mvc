<?php

class limitesControle extends controle {

    public function inicial() {

        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {

                $caixa = new Caixa();

            

                
            

        
        } else {
            
            session_destroy();
            header("Location: " . URL_BASE . "entrar");

        }
    
        $dados = array(
            
        );
        //onde é feito o carregamento do visual
        $this->carregarModelo('limites', $dados);
    }





}