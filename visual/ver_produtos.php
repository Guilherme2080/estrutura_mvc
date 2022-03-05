<div class="ver_produtos_pg_ver"> 
    
<div class="ver_prod_container_ver">
        <div class="parte_cima_nome_ver">
                
                   <p><?php echo $produto['nome'] ?> / <?php echo $produto['nome_tecnico'] ?></p> 
                   
        </div>
        

<div class="dados_prod_ver">   


    <!------------------------ QUADRADO DO NOME E DA REFERENCIA INÍCIO ------------------------->
        <div class="nome_referencia">

                <div class="titulo_quadros_ver">
                    <img src="<?php echo URL_BASE; ?>midias/imagens/identificacao.png">             
                    <h1>Identificações</h1>

                </div>

            
             <article class="id_pg_prod_ver">
                 id:<br>  <?php echo $produto['id'] ?>
             </article> 
   
             <article class="ref_pg_prod_ver"> 
                 ref:<br>  <?php echo $produto['referencia'] ?> 
             </article>    

            
        </div>
<!-- --------------------QUADRADO DO NOME E DA REFERENCIA FIM -------------------------------------->



<!-----------------------QUADRADO DA APLICAÇÃO INICIO------------------------------------------------> 
   
    <div class="aplic_prod_prod_ver">
        <img src="<?php echo URL_BASE; ?>midias/imagens/aplicacao.png"> 
        <h1>Aplicação</h1>
           <p><?php echo $produto['aplicacao'] ?></p> 
       
    </div> 
   
            
<!-----------------------QUADRADO DA APLICAÇÃO FIM------------------------------------------------> 


<!-----------------------QUADRADO DE INFORMAÇÕES DO ESTOQUE INICIO------------------------------------------> 
    <div class="quadro_info_estoque">
         <img src="<?php echo URL_BASE; ?>midias/imagens/estoq.png">             
            <h1>Estoque</h1>
               

                 <div class="nome_qtde_item1_ver"> 
                       Disponivel: <br><?php echo $produto['quantidade'] ?>
                </div>

                <div class="nome_qtde_item3_ver">
                       Estoq. Min: <br> <?php echo $produto['quantidade_minima'] ?>
                </div>

                <div class="nome_qtde_item2_ver"> 
                       Estoq Gov: <br><?php echo $produto['quantidade_governo'] ?>
                </div>

                <div class="bt_edit_pg_prod_ind">
                    <img src="<?php echo URL_BASE; ?>midias/imagens/edit_ver.png">  
                    <a href="<?php echo URL_BASE; ?>produtos/editar?id=<?php echo $produto['id'] ?>" target="_blank">Editar</a>
                  </div>
    </div>
               
  <!-----------------------QUADRADO DE INFORMAÇÕES DO ESTOQUE FIM------------------------------------------>               
                
           
</div>








    <div class="ver_prod_imagem_ver">       
        
        <div class="img_verprod_ver">

            <img src="<?php echo URL_BASE; ?>midias/imagens/produtos/<?php echo $produto['imagem']; ?>.jpg">  
                
                   
         
        </div>  



       
    </div>  

    <div class="dados_prod_ver_outro_lado">   
            
        <div class="cat_for_fab">

                   <img src="<?php echo URL_BASE; ?>midias/imagens/detalhes.png">      
                    <h1>detalhes</h1>

                <div class="cat_cat_ver">
                 cat: <br>   <?php echo $produto['categoria'] ?>
                </div>

                 <div class="cat_for_ver"> 
                forn: <br> <?php echo  $produto['fornecedor'] ?>
                 </div>

                <div class="cat_fab_ver">
                    fab:<br> <?php echo $produto['fabricante'] ?> 
                </div>
        </div>
         
   <!-- -------------------------------------------------------------------------------------- -->
        <div class="nome_loca_prod_ind_ver">

        <img src="<?php echo URL_BASE; ?>midias/imagens/local.png">  
            <h1>Local</h1>
            <p><?php echo $produto['local'] ?></p>

        </div>


            
        <div class="encapsula_precos_dados_ver">
            <p>p. tota compra: <br>  <?php echo 'R$ '.number_format($produto['total_produto_compra'], 2, ',', '.'); ?></p>
            <p>p. total venda: <br> <?php echo 'R$ '.number_format($produto['total_produto'], 2, ',', '.'); ?></p>
        </div>  
            



            <div class="preco_comp_prod_nome_preco_ver">

                <img src="<?php echo URL_BASE; ?>midias/imagens/etiqueta.png">  
                Compra:  <br> <?php echo 'R$ '.number_format($produto['preco_compra'], 2, ',', '.'); ?> 

            </div>


       

            <div class="preco_vend_prod_nome_preco_ver">
                 <img src="<?php echo URL_BASE; ?>midias/imagens/etiqueta2.png">  
                 <p> Venda: <br> <?php echo 'R$ '.number_format($produto['preco'], 2, ',', '.'); ?></p>
            </div>

    </div>

    
         
      
    
        
    </div>
   

    </div>
   </div>
</div>

