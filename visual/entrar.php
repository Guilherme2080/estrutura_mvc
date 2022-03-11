
<style>
    .menu{
        display: none;
    }
</style>

<div class="pagina_login">
    
    <div class="tela_logar">

            <div class="nome_marca_login">
                <article>Lourenço AutoPeças</article>
            </div>

            <div class="info_para_dados">
               <article>Informe seus dados  abaixo</article> 
            </div>

    <!-- ------------------------------------------------------------------------- -->
            <form method="POST" action="<?php URL_BASE ?>entrar/login">  
                <p>Email *</p>
                <input  required="" type="email" name="email" >
                
                <p>Senha *</p>
                <input  required="" type="password" name="senha" ><br>

                <input class="bt_entrar_login"  type="submit" value="entrar"><br>
               
                <aside>Itens com * é obrigato preencher</aside>
                <div class="mensagemerro">
                    <?php echo @$mensagem; ?>
                </div>
            </form>
    <!-- ---------------------------------------------------------------------------- -->

    </div>

    <div class="tela_apresentacao">



    </div>

</div>


