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
       <!-- <div class="topo_geral">
            
            <h1> 
                <a href="<?php //echo URL_BASE; ?>">Inicio</a>
                <a href="<?php //echo URL_BASE; ?>produtos">Produtos </a>
                <a href="<?php //echo URL_BASE; ?>clientes">Clientes</a>
                <a href="<?php //echo URL_BASE; ?>servicos">Serviços</a>
                <a href="<?php //echo URL_BASE; ?>dados">dados</a>
               
            </h1>
             <!--  URL_BASE irá puxar o caminho definido previamente no arquivo config.php  -->
       <!-- </div> -->
       
       <a href="<?php echo URL_BASE;?>arealogada"> 
         <!--  <div class="barra_cima remover"> -->
          <!-- <h1>Lourenço Auto Peças</h1> -->
          <!-- </div> -->
       </a>
       
        <div class="menu remover">
    
    <ul>
        
       
        <a href="<?php echo URL_BASE;?>clientes">
        <li class="quadrados">           
           
            
            <img src="<?php echo URL_BASE;?>midias/imagens/clientes.png">
            <p>Clientes</p>
                         
        </li>
        </a> 
        
        <a href="<?php echo URL_BASE;?>produtos">
        <li class="quadrados quadrados1">
            <img src="<?php echo URL_BASE;?>midias/imagens/produtos.png">
             <p>Estoque</p>
         
            
        </li>
        </a>
        
       <a href="<?php echo URL_BASE; ?>servicos">
        <li class="quadrados quadrados2">
            
            <img src="<?php echo URL_BASE;?>midias/imagens/servicos.png">
            <p> Serviços </p>      
           
         
        </li>
        </a>
        
         <a href="<?php echo URL_BASE;?>dados">
         <li class="quadrados quadrados3">           
           
                 <img src="<?php echo URL_BASE;?>midias/imagens/dados.png">
              <p> dados</p>
        
        </li>
        </a>
        
        
        
    </ul>
    
</div>

        
        
      
       
 <!--  funcao advinda do controle.php  está integrando o modelo fixo geral com os variaveis  --> 
        <?php $this->carregarVisualNoModelo($visualNome, $visualDados);?>
        
    </body>
    
</html>

