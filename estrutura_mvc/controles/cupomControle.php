<?php

class cupomControle extends controle {

    public function inicial() {

         $ver = $_GET['ver'];
         $clientes = new Clientes();
         $nota = $clientes->verNota($ver);
         $soma_geral = $clientes->somaGeral($ver);
         $data = $clientes->selecionarData();
         
         
           $arr = range(1, 999999);

            shuffle($arr);
            foreach ($arr AS $each) {
                
            }

         
         
        $dados = array(
            //envia a variavel para o modelo / template em html
            'data' => $data,
            'nota' => @$nota,
            'soma_geral' => @$soma_geral,
            'aleatorio' => @$each,
        );



        //carrega o arquivo carregar em html e recebe os dados do controle
        $this->carregarModelo('cupom', $dados);
    }

}
