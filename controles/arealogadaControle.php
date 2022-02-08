<?php

//Controle da area logada
class arealogadaControle extends controle {

    public function inicial() {

        //Se existir a sessão e ela não for vazia é porque foi feito o login       
        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {

            //instanciando o Modelo Cliente
            $clientes = new Clientes();

            //Lá no Modelo Cliente está sendo somado o valor total do Historico
            $geral = $clientes->somaGeralTotal();
        } else {
            //Caso não exista a sessão, ela é destroida redireciona para pagina de login 
            session_destroy();
            header("Location: " . URL_BASE . "entrar");
        }




        $dados = array(
            //esse método é usado para tornar o elemento do array 'geral' em variavel lá no Visual 
            //$geral recebeu lá em cima os dados da somaGeralTotal e agora está sendo 
            // enviado para o Visual no elemento 'geral' que lá no visual será instnciado como variavel $geral
            'geral' => $geral
        );


        //esse é o visual do elemento lá no Visual existe essa página arealogada.php
        $this->carregarModelo('arealogada', $dados);
    }

}
