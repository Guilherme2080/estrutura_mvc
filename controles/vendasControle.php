<?php

class vendasControle extends controle {

    public function inicial() {


        //SÓ ENTRA CASO EXISTA A SESSÃO 
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {

          } else {
            //não existindo sessão destroy ela mesmoassim e redireciona para o inicio
            session_destroy();
            header("Location: " . URL_BASE . "entrar");
        }

        
        
        $dados = array(
            
        );
        $this->carregarModelo('vendas', $dados);
    }
}
    