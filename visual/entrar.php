<div class="topo_pgs">
   <h1>Inicio<h4>Para acessar o sistema realize o login</h4></h1>

    
<div class="bt_voltar hvr-bounce-out">
    <a href="<?php echo URL_BASE ?>arealogada">Voltar</a> 
</div>   
</div>
<div class="tela_logar">

   
    <form method="POST" action="<?php URL_BASE ?>entrar/login">   


        <input class="email" required="" type="email" name="email" placeholder="INSIRA SEU EMAIL">
        <input  class="senha" required="" type="password" name="senha" placeholder="INSIRA SUA SENHA"><br>

        <input class="bt_entrar" type="submit" value="entrar"><br>

        <!--    <a href="<?php echo URL_BASE ?>cadastrar">Cadastrar</a> -->

        <div class="mensagemerro">
            <?php echo @$mensagem; ?>
        </div>

    </form>




</div>

