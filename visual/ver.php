

    
<div class="bt_voltar hvr-bounce-out">
        <a href="<?php echo URL_BASE ?>clientes">Voltar</a> 
</div>




<div class="exibe_nome_clinte remover">
    <h1>  Cliente:    <p><?php echo " ". @$nota[0]['nome']; ?></p> </h1>   
    <h1>  Telefone:   <p><?php echo @$nota[0]['telefone']; ?></p> </h1>   
    <h1>  Placa:      <p><?php echo @$nota[0]['placa']; ?></p> </h1>   
    <h1>  Endereço:   <p><?php echo @$nota[0]['endereco']; ?></p> </h1>   
    <h1>  Observação: <p><?php echo @$nota[0]['observacao']; ?></p> </h1>   
</div>


<br>

<div class="pesquisa_prod remover">
 <form method="POST" action="<?php echo URL_BASE ?>clientes/ver?ver=<?php echo $ver ?>">
     <input class="ip_pe" name="pesquisa1" placeholder="PESQUISAR PRODUTO/REFERENCIA/APLICAÇÃO">
 <input class="bt_pe" type="submit" value="Encontrar"><br>
 </form> 
</div>




<div class="pesquisa_produto remover">
   
    <table width="100%" border="0" cellspacing="0">
   <?php   if(isset($pesquisa1)){  ?>
        <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>QTDE</th>
                       <!-- <th>nome tecnico</th> -->
                        <th>local</th>
                        <th>preco</th>                     
                        <th>referencia</th>
                        <th>aplicaçao</th> 
                        <!-- <th>fornecedor</th>-->
                       
                    </tr>
            
        </thead>
        
   <?php } ?>
<?php   if(isset($pesquisa1)){  
    foreach($pesquisa1 as $pesquisa):?>
               
      
                <tbody>
                    <tr align=center>
                        <td id="id_prod" onclick="enviar()" > <?php echo $pesquisa['id']?> </td>
                        <td id="nome_prod" > <?php echo $pesquisa['nome']?> </td>
                        <td id="nome_prod" > <?php echo $pesquisa['quantidade']?> </td>
                        <!--<td> <?php// echo $pesquisa['nome_tecnico']?> </td> -->
                        <td id="pequenar" > <?php echo $pesquisa['local']?> </td>
                        <td id="p_preco" > <?php echo $pesquisa['preco']?> </td>                      
                        <td id="pequenar"> <?php echo $pesquisa['referencia']?> </td>
                        <td id="pequenar"> <?php echo $pesquisa['aplicacao']?> </td> 
                       <!-- <td> <?php// echo $pesquisa['fornecedor']?> </td>  -->
                        
                    </tr>
                     
               </tbody>
               
           
<?php endforeach; }?>

    </table>
    </div> 
<br>


               
             
               
               
               
               
               
               
               
               
               
               
<div class="nota_cliente">    
    

<!-- Exibe o nome do cliente que é recebido na funcao public function ver() no arquivo clientesControle
lá também é atribuida a variavel e enviada dentro do array, a configuracao do mvc
faz o indice do array torna-se variavel visivel aqui-->


<!-- dentro ainda da funcao public function ver() no arquivo clientesControle é feita 
as verificaçãoes para edicao onde essa variavel $editar é recebida via GET, caso o usuario dejese fazer 
uma edição, nesse caso ela está vazia , logo será feita a inserção e não a edição
-->

    
    
<?php if(empty($editar)){?>




<div class="inserir_produto">
    

<form method="POST" action="<?php echo URL_BASE ?>clientes/ver?ver=<?php echo $ver ?>">
       
    <input id="recebe_nome" name="nome_produto" type="text"  placeholder="NOME DO PRODUTO">    
    <input id="recebe_id" name="id_produto" type="text"  placeholder="N. DE ID DO PRODUTO">
    <input type="text"  name="quantidade"  placeholder="QUANTIDADE">
    <input id="recebe_preco" type="text"  name="preco"  placeholder="PREÇO">   
    <input class="bt_inserir_n" type="submit" value="INSERIR NA NOTA"><br>


</form>

     <br> 
</div>

    


<?php } ?>





<!-- Aqui a variavel $editar não está vazia logo se segue o processo para a edição -->
<?php if(!empty($editar)){?>

<div class="inserir_produto">
<form method="POST" action="<?php echo URL_BASE ?>clientes/ver?ver=<?php echo $ver ?>&editar=<?php echo $editar?>">

    <input required="" name="nome_produto_edit"  value="<?php echo $exibir_edicao['nome_produto']?>" type="text"  placeholder="NOME DO PRODUTO">
    <input name="id_produto_edit"  value="<?php echo $exibir_edicao['id_produto']?>" type="text"  placeholder="NUMERO DO ID DO PRODUTO">
    <input type="text" name="quantidade_edit" value="<?php echo $exibir_edicao['quantidade']?>"   placeholder="QUANTIDADE">
    <input type="text" name="preco_edit" value="<?php echo $exibir_edicao['preco']?>"   placeholder="PREÇO">

    <input type="submit" value="DEVOLVER AO ESTOQUE"><br>


</form>
</div>
<?php } ?>


<br><br><br><br>

        
        
        <!-- ESSA DIV IRÁ MOSTRAR O VALOR TOTAL DA NOTA DE CADA USUARIO, 
        A VARIAVEL $soma_geral['total_geral'],  É VINDA DO BANCO ONDE É FEITA A SOMA DESSES CAMPOS
        NO ARQUIVO Clientes.php o qual é um Model/Modelo na função  somaGeral($ver)
        -->
      

    </div>






<!--  EXIBIÇÃO DA NOTA QUE SERÁ IMPRESSA -->

<div class="nt_impressa">
    
    <div class="nt_topo">
        
        <img src="<?php echo URL_BASE ;?>midias/imagens/logo.jpg">        
        <h5>Lourenço Auto Peças  CNPJ : 1721775600091</h5>
        <h3>Boca da Mata - AL Contato: 996857745 CEP:57680000 </h3><br>
        <h4> Rua Genauro Vieira de Almeida Cliente: <?php echo $nota[0]['nome']; ?> </h4>
        <h4>Nota: <?php echo $aleatorio ?> </h4>
      
    </div>
   
    <div class="nt_corpo_ ">
        
        <table width="100%" >
            <thead>
             <tr>
                        <th>DESCRIÇÃO</th>
                        <th class="remover">ID PRODUTO</th>
                        <th>QTDE</th>
                        <th>VALOR</th>
                        <th>V.TOTAL</th>
                        <th>DATA</th>                       
                        <th class="remover">DEVOLVER</th>                       
                        <th class="remover">SÓ APAGAR</th>                       
                     
             </tr>
        </thead>
           
     
        
        
     
        <?php if(isset($nota)){
            foreach($nota as $not):
         ?>    
        
        <tbody>
            <tr align="center">
                <td><?php echo $not['nome_produto'] ?> </td>
                <td class="remover"><?php echo $not['id_produto'] ?> </td>
                <td> <?php echo $not['quantidade'] ?>  </td>
                <td>   <?php echo $not['preco'] ?>          </td>
                <td> <?php echo 'R$' . number_format($not['valor_total'], 2, ',', '.') ?> </td>
                <td> <?php echo date("d/m/Y H:i:s", strtotime($not['data'])); ?>  </td>
                <td ><a style="background:#7CB2D5; border-radius:2px; color:#fff; href="<?php echo URL_BASE; ?>clientes/ver?ver=<?php echo $ver ?>&editar=<?php echo $not['id'] ?>">DEVOLVER</a></td>
                <td><a style="background-color: #5CB85C; border-radius:2px; color:#fff;"  href="<?php echo URL_BASE; ?>clientes/ver?ver=<?php echo $ver ?>&excluir=<?php echo $not['id'] ?>">SÓ APAGAR</a></td>
              
            </tr>
        </tbody>
        
    
 
       
        <?php endforeach; } ?>  
   
   
        
   
 

        
       
</table>
        <div class="total_geral n_meio">          
             <?php  echo "TOTAL DA NOTA ".' R$ ' . number_format($soma_geral['total_geral'], 2, ',', '.') ?>
    </div>
        
        </div>
 <div class="nt_topo">
        
    
      <p>
        
         A GARANTIA PARA PEÇAS E SERVIÇOS É DE 90 DIAS, 
         INDEPENDENTEMENTE DE PROBLEMAS PESSOAIS,viagens etc.. 
         É NECESSARIO APRESENTAR A NOTA NO PRAZO !!!
         OBS: Garantia  ou troca Somente com apresentação desta Nota !!!
     </p>
     
       <div>
         Código de Defesa do Consumidor – Lei 8.078/90 
         
      </div>
    </div>



</div>

<input class="remover bt_imprimir" type="button" value="IMPRIMIR FOLHA" onClick="window.print()"/>
<a class="remover bt_imp_cupom" href="<?php echo URL_BASE;?>cupom?ver=<?php echo $ver ?>">IMPRIMIR CUPOM</a>
    


<label class="remover bt_historico" for="toggle-1">
        VER HISTORICO
</label>
<input type="checkbox" id="toggle-1">


<div class="historico" id="mostra">
        
        <table width="70%"  align=center>
            <thead>
             <tr >
                        <th>DESCRIÇÃO</th>
                        <th>QTDE</th>
                        <th>VALOR</th>
                        <th>V.TOTAL</th>
                        <th>DATA</th>                       
                     
             </tr>
        </thead>
           
     
       
        <h4 class="n_historico"> HISTORICO</h4>
        
           <div class="total_geral">          
             <?php  echo "TOTAL DO HISTORICO ".' R$ ' . number_format($soma_geral_historico['total_geral_historico'], 2, ',', '.') ?>
         </div>
        
        
            <?php
            if (isset($nota_historico)) {
                foreach ($nota_historico as $nota):
                    ?>  

        
        <tbody>
   
                        <tr align="center">
                            <td><?php echo $nota['nome_produto'] ?> </td>
                            <td> <?php echo $nota['quantidade'] ?>  </td>
                            <td>   <?php echo $nota['preco'] ?>          </td>
                            <td> <?php echo 'R$' . number_format($nota['valor_total'], 2, ',', '.') ?> </td>
                            <td> <?php echo date("d/m/Y H:i:s", strtotime($nota['data'])); ?>  </td>
                            
                        </tr>
     
         </tbody>
     
 <?php endforeach; } ?>  
        </table>

  
     

    
</div>

   
   
 