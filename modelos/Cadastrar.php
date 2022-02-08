<?php

class cadastrar extends modelo{
    
    //a função que verificará se já existe o email digirado , no banco
    public function verificaLogar($email, $senha){        
          $sql ="SELECT * FROM logar WHERE email = '$email'";
          $sql = $this->banco->query($sql);
           
          //se houver resultados retorna true
          if($sql->rowCount() > 0){            
          
          return true; 
        
    }
    
          }
    
          //função responsavel pelo cadastro do usuario
    public function cadastrarUsuario($email, $senha){
        
     
          //faz a inserção no banco de dados do nome e senha informados
            $sql ="INSERT INTO logar SET email = '$email' , senha = '$senha' ";
            $sql = $this->banco->query($sql);
          
            $mensagem = "cadastrado com sucesso";
            return $mensagem; 
    
    
}

 public function fazerEntrarAposCadastro($email, $senha){
        
               
             $sql ="SELECT * FROM logar WHERE email = '$email' AND senha = '$senha'";
             $sql = $this->banco->query($sql);
             
             if($sql->rowCount() > 0){
                 $dados = $sql->fetch();
                 
                 $_SESSION['entrar'] = $dados['id'];
             }
         
    }




    }