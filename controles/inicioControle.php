<?php

//isso é uma classe 
// está recebendo / extendendo a classe controle que se encontra no arquivo controle.php
//o qual é um ajudador
class inicioControle extends controle{
   
    //isso é um metodo
    public function inicial() {
     
        
    //enviar as informação coletadas para o visual, com o nome do visual que quero puxar
    //visual que será mostrado, que vem la da pasta visual
      //um segundo parametro está sendo enviado que são os dados do array acima
       $dados = array();
        $this->carregarModelo('entrar', $dados);
    }
    
  
}
