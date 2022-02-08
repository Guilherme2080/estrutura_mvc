<?php

class cadastrarControle extends controle {

    public function inicial() {

        //recebe o modelo cadastrar 
        $cadastrar = new Cadastrar();

        //se existir email e ele não for vazio
        if (isset($_POST['email']) && !empty($_POST['email'])) {

            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            //executa o model lá do arquivo cadastrar.php o model / modelo
            //verificando se já existe esse usuario no banco
            $cadastrar->verificaLogar($email, $senha);

            //se for falso então não existe esse email no banco,
            // insere com o metodo cadastrarUsuario e emite a mensagem de inserção
            if ($cadastrar->verificaLogar($email, $senha) == false) {
                $cadastrar->cadastrarUsuario($email, $senha);

                $mensagem = "Cadastrado com sucesso , Você entrará no sistema automaticamente...";

                $cadastrar->fazerEntrarAposCadastro($email, $senha);

                if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {
                    header("Refresh: 5;url=" . URL_BASE . "arealogada");
                } else {

                    // header("Location: " . URL_BASE . "entrar");
                    $mensagem = "Dados informados Invalidos!";
                    header("Refresh: 2;url=" . URL_BASE . "entrar");
                }
                header("Refresh: 2;url=" . URL_BASE . "arealogada");

                //echo "Cadastrado com sucesso";
            } else {
                //caso contrario existe o email cadastrado, retorna apenas a mensagem
                $mensagem = "Já existe um cadastro com esse email";
                //echo " já existe ";
            }
        }


        $dados = array(
            //envia a variavel para o modelo / template em html
            'mensagem' => @$mensagem
        );



        //carrega o arquivo carregar em html e recebe os dados do controle
        $this->carregarModelo('cadastrar', $dados);
    }

}
