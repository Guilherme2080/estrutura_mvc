<div class="cad_tela">
    <h3>Preencha os dados para Cadastrar</h3>
    <form method="POST" action="<?php echo URL_BASE; ?>cadastrar">
   
        <input class="email_cad" required="" type="email" name="email" placeholder="Email">
        <input class="senha_cad" required="" type="password" name="senha" placeholder="Senha">  
        <input class="bt_cad" type="submit" value="Cadastrar"> 
   
        <a href="<?php echo URL_BASE ?>entrar">Voltar Para Entrar</a>
        <div class="mensagemerro"><h4><?php echo  @$mensagem ?></h4></div>
</form>
    
 


</div>


 
