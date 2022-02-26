<?php

class parceirosControle extends controle {

    public function inicial() {


        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {


            
            $dados = array(
                
            );

            $this->carregarModelo('parceiros', $dados);
        } else {
            
            session_destroy();
            header("Location: " . URL_BASE . "entrar");
        }

    }

}
