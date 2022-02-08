<?php

class dadosControle extends controle {

    public function inicial() {


        if (isset($_SESSION['entrar']) && !empty($_SESSION['entrar'])) {


            $dados = new Dados();
            $qtdprod = $dados->qtdProd();
            $totalCompra = $dados->totProdCompra();
            $total = $dados->totProduto();
            $totCliente = $dados->totClientes();
            
            
            
            $dados = array(
                'qtdprod' => @$qtdprod,
                'totalCompra' => @$totalCompra,
                'total' => @$total,
                'totalclientes' => @$totCliente
            );

            $this->carregarModelo('dados', $dados);
        } else {
            
            session_destroy();
            header("Location: " . URL_BASE . "entrar");
        }

    }

}
