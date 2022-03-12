
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

        <div class="descricao_tel_ap">
            <p class="novo_designe_tel_ap">Novo Design</p>
            
            <p class="descricao_1_terl_ap">Veja os produtos em estoque, os clientes cadastrados e realize vendas</p>
            <p class="descricao_2_terl_ap">Realize o login para ter acesso a todas as funções de maneira prática</p>
            <p class="descricao_3_terl_ap">sistema Lourenço AutoPeças</p>
            <img class="img_tel_login4" src="<?php echo URL_BASE;?>midias/imagens/faturamento.png">
        </div>
        <div class="descricao_img_tel_ap">
            <img class="img_tel_login1" src="<?php echo URL_BASE;?>midias/imagens/computador.png">
            <img class="img_tel_login2" src="<?php echo URL_BASE;?>midias/imagens/carteira.png">
            <img class="img_tel_login3" src="<?php echo URL_BASE;?>midias/imagens/estoque.png">
        </div>

    </div>

</div>


