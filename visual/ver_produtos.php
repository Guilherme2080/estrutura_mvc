

<div class="ver_produtos_pg">
   
    
    
    
    
    
    <div class="ver_prod_imagem">
       
          
        
        <div class="img_verprod">
          <img src="<?php echo URL_BASE; ?>midias/imagens/produtos/<?php echo $produto['imagem']; ?>.jpg">  
        </div>
         
        
        <div class="img_verprod">
            
       
      <li>
          <p>ID</p> <div><?php echo $produto['id'] ?></div>        
          <p>Nome Tecnico</p><div> <?php echo $produto['nome_tecnico'] ?></div>
          <p>Preço</p><div> <?php echo 'R$ '.number_format($produto['preco'], 2, ',', '.'); ?> </div>
          <p>Preço Compra</p><div> <?php echo 'R$ '.number_format($produto['preco_compra'], 2, ',', '.'); ?></div>
          <p>lOCAL</p> <div><?php echo $produto['local'] ?></div>
          <p>REFERENCIA</p> <div><?php echo $produto['referencia'] ?></div>
              <p>quantidade</p><div> <?php echo $produto['quantidade'] ?></div>
          <p>fornecedor</p><div><?php echo $produto['fornecedor'] ?></div>
   
      
       

          <p>aplicação</p> <div><?php echo $produto['aplicacao'] ?></div>
          <p>qtde governo</p><div> <?php echo $produto['quantidade_governo'] ?></div>
          <p>qtde minima</p><div> <?php echo $produto['quantidade_minima'] ?></div>
          <p>fabricante</p><div> <?php echo $produto['fabricante'] ?> </div>
          <p>categoria</p><div> <?php echo $produto['categoria'] ?></div>
          <p>preço total de compra</p> <div> <?php echo 'R$ '.number_format($produto['total_produto_compra'], 2, ',', '.'); ?></div>
          <p>preço total de compra</p> <div> <?php echo 'R$ '.number_format($produto['total_produto'], 2, ',', '.'); ?></div>
          
         
          
       
      </li> 
 </div>

    </div>
   
    <div class="n_p">
        
      
   

   
  
 
   
       

   
    </div>
    
    
    
  
   
    




</div>

