<?php

class entrar extends modelo{
    
    public function fazerEntrar($email, $senha){
        
               
             $sql ="SELECT * FROM logar WHERE email = '$email' AND senha = '$senha'";
             $sql = $this->banco->query($sql);
             
             if($sql->rowCount() > 0){
                 $dados = $sql->fetch();
                 
                 $_SESSION['entrar'] = $dados['id'];
             }
         
    }
    
}
