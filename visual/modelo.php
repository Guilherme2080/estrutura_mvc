

<html>
    <!--  o que estiver nesse arquivo será mostrado 
    em todas as páginas que ultilize o carregarModelo  -->
    <head>
        <title>Sistema - Lourenço Auto Peças</title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>midias/css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>midias/hover/css/hover-min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>midias/hover/css/hover.css" />
<style>
@import url('https://fonts.googleapis.com/css2?family=Miltonian&family=Shadows+Into+Light&display=swap');
</style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="shortcut icon" href="<?php echo URL_BASE;?>midias/imagens/favicon.ico" />
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo URL_BASE; ?>midias/js/script.js"></script>
        <script type="text/javascript" src="<?php echo URL_BASE; ?>midias/js/script_jquery.js"></script>     

    
    </head>
    <body>
        
        
        <div class="menu remover">
    
            <ul>
        

                <li class="lap_na_barra">
                    Lourenço AutoPeças
                </li>

                <a class="c_sele" href="<?php echo URL_BASE;?>clientes">
                    <li>   
                                
                        Clientes
                                
                    </li>
                </a> 
            


                <a class="p_sele" href="<?php echo URL_BASE;?>produtos">
                    <li  >
                        
                        Estoque
                    
                        
                    </li>
                </a>
                
                <a class="s_sele" href="<?php echo URL_BASE; ?>servicos">
                    <li  >
                        
                    
                        Serviços     
                    
                    
                    </li>
                </a>
                
                <a class="d_sele" href="<?php echo URL_BASE;?>dados">

                    <li>           
                    
                        Dados
                    
                    </li>
                </a>

                <a class="pa_sele" href="<?php echo URL_BASE;?>parceiros">

                    <li>     
                        Parceiros                    
                    </li>
                </a>
                <a class="ca_sele" href="<?php echo URL_BASE;?>caixa">

                    <li>     
                        Caixa                    
                    </li>
                </a>
                <a class="li_sele" href="<?php echo URL_BASE;?>limites">

                    <li>     
                        Limites                    
                    </li>
                </a>
                
        
        
            </ul>
    
    </div>

        

    
<!--  funcao advinda do controle.php  está integrando o modelo fixo geral com os variaveis  --> 
        <?php $this->carregarVisualNoModelo($visualNome, $visualDados);?>
        
    </body>
    
</html>

