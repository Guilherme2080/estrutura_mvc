<?php
class  Base{
    
    public function rodar() {
       
        $url = '/';
        if(isset($_GET['url'])){
   //concatenando o valor da url aparece a / "barra", junto com o valor passado via Get
            $url .= $_GET['url'];
        } 
        
        //variavel que poderá ser setada ou não  lá em baixo no if, por padrao vazia
        $parametros = array();
        
        //se algo foi enviado e não é só uma barra 
        if(!empty($url) && $url != '/'){
  
            //separando pela barra, criando um array com o caminho passado na url
            $url = explode('/', $url);
            
            //remove o primeiro registro que nesse caso era 0
            array_shift($url);
           
           //a primeira informação do array da URL é o Controle, esta sendo criado
           $atualControle = $url[0].'Controle';
           //estando ja dentro do controle seu registro é excluido do array  
           array_shift($url);
            
     //depois de excluido o controle resta a ação se ela existir e não for vazia é setada
           if(isset($url[0]) && !empty($url[0])){
               $atualAcao = $url[0];
             //estando ja dentro da ação seu registro é excluido do array  
              array_shift($url);  
           } else{
              //se não houver ação setada
               $atualAcao = 'inicial';
           }
           
           //se houver resultados dos parametros, contagem
           if(count($url) > 0){
               $parametros = $url;
           }
           
        
           
        } else{
           //se nada foi enviado ou se for só uma barra vai pro controle inicial
            $atualControle = 'inicioControle';
            $atualAcao = 'inicial';
        }
        
        //caso o controle não exista ao ser digitado qualquer coisa na barra de pesquisa
 if(!file_exists('controles/'.$atualControle.'.php') || !method_exists($atualControle, $atualAcao)){
            $atualControle = 'naoencontradoControle';
            $atualAcao = 'inicial';
        }
        //criando o objeto de acordo com o controle que a variavel $atualControle receber     
      $controle = new $atualControle();
        
       
       
       
       //a ação nada mais é doque os metodos criado em cada controle especifico  
      //faz a axecução da classe, no caso o metodo , e envia os parametros caso exista
       call_user_func_array(array($controle, $atualAcao), $parametros);  
          
          
        //echo "<hr>";
        //echo "O CONTROLE EH: ".$atualControle."<br/>";
        //echo "A ACAO EH: ".$atualAcao."<br/>";
        //echo "O PARAMETROS SAO: ". print_r($parametros, true)."<br/>";
        
        
       //
      
    }
    
}


