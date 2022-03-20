<?php

class entrarControle extends controle {

    //toda página precisa do metodo inicial
    public function inicial() {

        $dados = array();



        $this->carregarModelo('entrar', $dados);
    }

    public function login() {
    
        $entrar = new Entrar();

        if (isset($_POST['email']) && !empty($_POST['senha'])) {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            $entrar->fazerEntrar($email, $senha);
        } 
        

        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {
            header("Location: " . URL_BASE . "produtos");
        } else {

          // header("Location: " . URL_BASE . "entrar");
            $mensagem = "Dados informados Invalidos!";
            header("Refresh: 2;url=".URL_BASE."entrar");
        
        }
        
        $dados = array(
            'mensagem' => $mensagem
        );
    
        $this->carregarModelo('entrar', $dados);
    }

    
    public function sair() {
        session_destroy();
        header("Location: " . URL_BASE);
    }

}
