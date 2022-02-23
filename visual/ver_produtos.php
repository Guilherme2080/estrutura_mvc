<div class="ver_produtos_pg_ver"> 
    
<div class="ver_prod_container_ver">



<div class="dados_prod_ver">   

             
             <article class="id_pg_prod_ver">
                 id:  <?php echo $produto['id'] ?>
             </article> 
   
             <article class="ref_pg_prod_ver"> 
                 ref:  <?php echo $produto['referencia'] ?> 
             </article>        
             
       <!-- ------------------------------------------------------- -->
       <!-- ------------------------------------------------------- -->

       <div class="aplic_prod_prod_ver">
            <?php echo $produto['aplicacao'] ?>
       
        </div>
       <!-- ------------------------------------------------------- -->
       <!-- ------------------------------------------------------- -->



                <div class="nome_qtde_item1_ver"> 
                       Disponivel: <?php echo $produto['quantidade'] ?>
                </div>

                <div class="nome_qtde_item3_ver">
                       Estoq. Min <?php echo $produto['quantidade_minima'] ?>
                </div>

                <div class="nome_qtde_item2_ver"> 
                       Estoq Gov: <?php echo $produto['quantidade_governo'] ?>
                </div>
                
                
           
 </div>




    <div class="ver_prod_imagem_ver">       
        
        <div class="img_verprod_ver">

                <article>
                    <?php echo $produto['nome'] ?> / <?php echo $produto['nome_tecnico'] ?>
                </article>

                <img src="<?php echo URL_BASE; ?>midias/imagens/produtos/<?php echo $produto['imagem']; ?>.jpg">  
                
                    <div class="preco_comp_prod_nome_preco_ver">

                      Compra:  <?php echo 'R$ '.number_format($produto['preco_compra'], 2, ',', '.'); ?> 

                    </div>
                    
                    <div class="preco_vend_prod_nome_preco_ver">

                         Venda:   <?php echo 'R$ '.number_format($produto['preco'], 2, ',', '.'); ?>
                    </div>
         
        </div>  



       
    </div>  

    <div class="dados_prod_ver_outro_lado">   
        
        
        <div class="cat_cat_ver">
            cat:
            <?php echo $produto['categoria'] ?>
        </div>

        <div class="cat_for_ver"> 
            forn: 
            <?php echo  $produto['fornecedor'] ?>
        </div>

        <div class="cat_fab_ver">
            fab:
             <?php echo $produto['fabricante'] ?> 
        </div>
   <!-- -------------------------------------------------------------------------------------- -->
        <div class="nome_loca_prod_ind_ver">

           <i>Local : </i><br> <?php echo $produto['local'] ?>

        </div>
            
        <div class="encapsula_precos_dados_ver">
            <p>p. tota compra:  <?php echo 'R$ '.number_format($produto['total_produto_compra'], 2, ',', '.'); ?></p>
            <p>p. total venda:  <?php echo 'R$ '.number_format($produto['total_produto'], 2, ',', '.'); ?></p>
        </div>  
            
    </div>

    
         
      
    
        <div class="bt_edit_pg_prod_ind">

                 <a href="<?php echo URL_BASE; ?>produtos/editar?id=<?php echo $produto['id'] ?>" target="_blank">Editar</a>
         </div>
    </div>
   

    </div>
   </div>
</div>

