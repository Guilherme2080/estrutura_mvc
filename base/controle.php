<?php
// esse arquivo é o ajudador dos controles precisa ser extendido nos arquivos de controle
//como por exemplo inicioControle.php etc..
class controle{
     //primeiro ajudador usado pra carregar o visual deve puxa-lo assim
    // $this->carregarVisual('inicio'); passando a variavel $visualNome nesse caso inicio
    //$visualDados é quem recebe os dados enviados pelo array dados do inicioControle.php
    //que por padrão é um array, em caso de nada enviado fica vazio
    public function carregarVisual($visualNome, $visualDados = array()){
        //transforma a chave ou indice recebida do aquivo inicioControle.php em variavel
        extract($visualDados);
        //pegando o arquivo indicado, lá na pasta visual
        require 'visual/'.$visualNome.'.php';
    }
    
 //para que não se tenha que fazer varios topos em html em cada página entre outras intemperies
 //coisas que deverá aparecer em todas as páginas
 //carregarModelo puxara apenas o arquivo modelo.php onde constará essa informação de layout
    public function carregarModelo($visualNome, $visualDados = array()) {
        require 'visual/modelo.php';
    }
    
    //ESSA FUNÇÃO SERÁ USADO DENTRO DO TEMPLATE/ MODELO modelo.php PARA MOSTRAR O VISUAL
    public function carregarVisualNoModelo($visualNome, $visualDados = array()) {
        extract($visualDados);
        require 'visual/'.$visualNome.'.php';
    }
}

