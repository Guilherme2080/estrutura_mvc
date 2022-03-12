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

                <a href="<?php echo URL_BASE;?>clientes">
                    <li class="">   
                                
                        Clientes
                                
                    </li>
                </a> 
            


                <a href="<?php echo URL_BASE;?>produtos">
                    <li>
                        
                        Estoque
                    
                        
                    </li>
                </a>
                
                <a href="<?php echo URL_BASE; ?>servicos">
                    <li class="">
                        
                    
                        Serviços     
                    
                    
                    </li>
                </a>
                
                <a href="<?php echo URL_BASE;?>dados">

                    <li class=" ">           
                    
                        
                        dados
                    
                    </li>
                </a>

                <a href="<?php echo URL_BASE;?>parceiros">

                    <li class="">           
                    
                    
                        Parceiros
                    
                    </li>
                </a>
                
        
        
            </ul>
    
    </div>

        
        
    
    
<!--  funcao advinda do controle.php  está integrando o modelo fixo geral com os variaveis  --> 
        <?php $this->carregarVisualNoModelo($visualNome, $visualDados);?>
        
    </body>
    
</html>

