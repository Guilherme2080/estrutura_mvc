<div class="ver_produtos_pg">
 
    
    <div class="ver_prod_imagem">
       
        
        <div class="img_verprod">
        <article class="nome_pg_prod_2"><?php echo $produto['nome'] ?> / <?php echo $produto['nome_tecnico'] ?></article>
          <img src="<?php echo URL_BASE; ?>midias/imagens/produtos/<?php echo $produto['imagem']; ?>.jpg">  
         
        </div>
         
        
    <div class="dados_prod_ver">
            
       
      <li>
          <article class="id_pg_prod_ver">id:  <?php echo $produto['id'] ?> </article> 
          <article class="ref_pg_prod_ver plus_size">ref:  <?php echo $produto['referencia'] ?> </article> 
          
           <article></article>   

        <div class="encapsula_precos_ver">

                <article  class="preco_comp_prod_ver"> 

                    <div class="preco_comp_prod_nome_ver">
                        Preço de Compra
                    </div> 

                    <div class="preco_comp_prod_nome_preco">
                    <?php echo 'R$ '.number_format($produto['preco_compra'], 2, ',', '.'); ?>   
                    </div>

                </article>

                <article class="preco_vend_prod">

                    <div class="preco_vend_prod_nome_ver">
                        Preço de Venda
                    </div>

                    <div class="preco_vend_prod_nome_preco">
                            <?php echo 'R$ '.number_format($produto['preco'], 2, ',', '.'); ?>
                    </div>

                </article> 
        </div>
        
        <div class="encapsula_aplic"> 

<div class="aplic_prod_nome">
    aplicação
</div>

<div class="aplic_prod_prod">
    <?php echo $produto['aplicacao'] ?>
</div>

</div>



    <div class="encapsula_quantidades">

        <div class="itens_qtde">
            <p>quantidade</p> 

            <div class="nome_qtde_item1"> 
                <?php echo $produto['quantidade'] ?>
            </div>
        </div>

        <div class="itens_qtde">
            <p>qtde governo</p>
             <div class="nome_qtde_item2"> 
                 <?php echo $produto['quantidade_governo'] ?>
            </div>
        </div>

        <div class="itens_qtde">
            <p>qtde minima</p>
             <div class="nome_qtde_item3">
                  <?php echo $produto['quantidade_minima'] ?>
             </div>
        </div>
    </div>



    <div class="local_prod_ind">

             <p>Localização</p>

             <div class="nome_loca_prod_ind"><?php echo $produto['local'] ?></div>
         </div>
        <div class="titulo_dados_prod">
            <h2>Dados de compra desse produto</h2>
        </div>
          
        <div class="encapsula_precos_dados">
            <p>investimento de compra: <?php echo 'R$ '.number_format($produto['total_produto_compra'], 2, ',', '.'); ?></p>
            <p>investimento de venda: <?php echo 'R$ '.number_format($produto['total_produto'], 2, ',', '.'); ?></p>
        </div>  
          
         
         
         
         
      </li> 
     
      
      <div class="encapsulando_cat_fabr">

    <div class="cat_for_fab"><b>categoria:</b> <?php echo $produto['categoria'] ?></div>
    <div class="cat_for_fab"> <b>fornecedor: </b><?php echo  $produto['fornecedor'] ?></div>
    <div class="cat_for_fab"><b>fabricante:</b> <?php echo $produto['fabricante'] ?> </div>

        </div>
        <div class="bt_edit_pg_prod_ind">
        <a href="<?php echo URL_BASE; ?>produtos/editar?id=<?php echo $produto['id'] ?>" target="_blank">Editar</a>
      </div>
    </div>
   

    </div>
   
    
   


</div>

