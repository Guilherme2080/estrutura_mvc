<style>
    table{
        display:none;
    }
</style>
<div class="topo_pgs">
    <h1>Produtos<h4>Para encontrar um produto no estoque realize uma pesquisa</h4></h1>


    <div class="bt_voltar hvr-bounce-out">
        <a href="<?php echo URL_BASE ?>arealogada">Voltar</a> 
    </div>

</div>
<br>




<label class="remover estilo_inserir" for="toggle-1">
    <p>INSERIR</p>
</label>
<input type="checkbox" id="toggle-1">


<div class="pesquisa_prod remover" >
    <form method="POST" action="<?php echo URL_BASE ?>produtos">
        <input class="ip_pe" name="pesquisa_prod" placeholder="DIGITE O PRODUTO/REFERENCIA/APLICAÇÃO PRESSIONE ENTER APÓS">
        <input class="bt_pe" type="submit" value="Buscar"><br>
    </form> 
    <br>
</div>   

<!-- -----------------DIV QUE CONTEM TODOS BOTOES DE PESQUISA DE ESTOQUE------------ -->
<div class="estoq_ab">
<!------------------------------ INICIO BOTAO DE ESTOQUE BAIXO-------------------------------- -->
    <div class="estoque_baixo remover">
        <form method="POST" action="<?php echo URL_BASE ?>produtos">
            <p>Estoque Baixo</p>
            <input name="estoque_minimo"  type="submit" value="">              
        </form>      

    </div>
    <!------------------------------ FIM BOTAO DE ESTOQUE BAIXO-------------------------------- -->

    <!------------------------------ INICIO BOTAO DE ESTOQUE GOVERNO-------------------------------- -->
    <div class="estoque_alto remover">
        <form method="POST" action="<?php echo URL_BASE ?>produtos">    
            <p>Estoque Gov</p>            
            <input name="estoque_gov" type="submit" value="">               
        </form> 

    </div>
    
    <!------------------------------ INICIO BOTAO DE ELETRICA-------------------------------- -->
    <div class="estoque_eletrica remover">
        <form method="POST" action="<?php echo URL_BASE ?>produtos">    
            <p>Eletrica</p>            
            <input name="eletrica" type="submit" value="">               
        </form> 

    </div>
    <!------------------------------ FIM BOTAO DE ELETRICA-------------------------------- -->
</div>

<div id="mostra">



    <br>


    <div class="apresenta">
        <h5>Para inserir um novo Produto Preencha os campos, Para valores fracionados use ponto(.) e Não virgula(,)</h5>  
        <h4></h4>  
    </div>

    <div class="produtos">



        <?php if (!isset($id) && !isset($excluir)): ?>





            <form  method="POST" enctype="multipart/form-data" action="<?php URL_BASE; ?>produtos">



                <!-- envio da imagem-->
                <input class="i bt_foto" type="file" name="arquivo">     

                <input class="i" name="nomeimagem" type="text" placeholder="NOME DA IMAGEM">


                <input class="i" name="preco" type="text" placeholder="PREÇO">
                <input class="i" name="preco_compra" type="text" placeholder="PREÇO DE COMPRA">
                <input class="i" required=""   name="nome" type="text" placeholder="NOME DO PRODUTO"><br>
                <input class="n"  type="text" name="nome_tecnico" placeholder="NOME TECNICO OU DA NOTA"><br>
                <input class="i" type="text"  name="local" placeholder="LOCAL NO ESTOQUE">   
                <input class="i" type="text"  name="referencia"  placeholder="REFERENCIA">  
                <input class="i" type="text"  name="aplicacao"  placeholder="APLICAÇÃO EM VEICULOS"><br>  
                <input class="i" type="text"  name="quantidade"  placeholder="QUANTIDADE">  
                <input class="i" type="text"   name="quantidade_governo" placeholder="QUANTIDADE GOVERNO">  
                <input class="i" type="text"   name="quantidade_minima" placeholder="QUANTIDADE MINIMA">   <br>
                <input class="i" type="text"   name="fornecedor" placeholder="FORNECEDOR">     
                <input class="i" type="text"   name="fabricante" placeholder="FABRICANTE">   
                <input class="i" type="text"   name="categoria" placeholder="CATEGORIA"><br>

                <input class="bt_prod" type="submit" value="Adcionar"><br>


            </form><br>
        <?php endif; ?>

    </div> 

</div>  



<?php if (isset($id)): //SE EXISTIR ID SERÁ FEITO EDIÇÃO  ?>

<style>
    .opcoes_lst_prod, .comtem_quadros, .topo_pgs,.estoq_ab,.ip_pe,.estilo_inserir,.estoque_baixo,.pesquisa_prod,.estoque_alto{
        display: none;
    }
    table,tr,td{
        display:none;
    }
</style>
 <div  class="form_editar_produto"> 
        <!-- <form class="edit_form" enctype="multipart/form-data" method="POST" action="<?php URL_BASE ?>editar?id=<?php echo $id ?>">
        

            <input class="i" name="nomeimagem" type="text" value="<?php echo $selecionar_produtos['imagem'] ?>" placeholder="NOME DA IMAGEM">
            <input class="i bt_foto" type="file" name="arquivo"> 
            <input class="i" name="preco" type="text" value="<?php echo $selecionar_produtos['preco'] ?>" placeholder="PREÇO">
            <input class="i" name="preco_compra" type="text" value="<?php echo $selecionar_produtos['preco_compra'] ?>" placeholder="PREÇO DE COMPRA">
            <input class="i" required=""   name="nome" type="text" value="<?php echo $selecionar_produtos['nome'] ?>" placeholder="NOME DO PRODUTO"><br>
            <input class="n"  type="text" name="nome_tecnico" value="<?php echo $selecionar_produtos['nome_tecnico'] ?>" placeholder="NOME TECNICO OU DA NOTA"><br>
            <input class="i" type="text"  name="local" value="<?php echo $selecionar_produtos['local'] ?>"  placeholder="LOCAL NO ESTOQUE">   
            <input class="i" type="text"  name="referencia" value="<?php echo $selecionar_produtos['referencia'] ?>"  placeholder="REFERENCIA">  
            <input class="i" type="text"  name="aplicacao" value="<?php echo $selecionar_produtos['aplicacao'] ?>"  placeholder="APLICAÇÃO EM VEICULOS"><br>  
            <input class="i" type="text"  name="quantidade"  value="<?php echo $selecionar_produtos['quantidade'] ?>" placeholder="QUANTIDADE">  
            <input class="i" type="text"   name="quantidade_governo" value="<?php echo $selecionar_produtos['quantidade_governo'] ?>" placeholder="QUANTIDADE GOVERNO">  
            <input class="i" type="text"   name="quantidade_minima" value="<?php echo $selecionar_produtos['quantidade_minima'] ?>" placeholder="QUANTIDADE MINIMA">   <br>
            <input class="i" type="text"   name="fornecedor" value="<?php echo $selecionar_produtos['fornecedor'] ?>" placeholder="FORNECEDOR">     
            <input class="i" type="text"   name="fabricante" value="<?php echo $selecionar_produtos['fabricante'] ?>" placeholder="FABRICANTE">   
            <input class="i" type="text"   name="categoria" value="<?php echo $selecionar_produtos['categoria'] ?>" placeholder="CATEGORIA"><br>

            <input class="bt_prod_edit" type="submit" value="Atualizar"><br>
        </form><br> -->


  
    <form class="edit_form" enctype="multipart/form-data" method="POST" action="<?php URL_BASE ?>editar?id=<?php echo $id ?>"
    <div class="ver_produtos_pg">
    
        
    <div style="margin-left: -100px;  " class="ver_prod_imagem">
        
        
        <div class="img_verprod">
             <img src="<?php echo URL_BASE; ?>midias/imagens/produtos/<?php echo $selecionar_produtos['imagem']; ?>.jpg">  
                
              <h3>ESCREVA O NOME DA IMAGEM </h3>   
             <input class="input_name_edit" name="nomeimagem" type="text" value="<?php echo $selecionar_produtos['imagem'] ?>" placeholder="NOME DA IMAGEM">
             <label for="arquivo">Buscar</label>
             <input class="input_img_edit" bt_foto" type="file" name="arquivo" id="arquivo">  
             <input class="input_name_edit posicao_input_envia" type="submit" value="Atualizar">
        </div>

        
        
    <div class="dados_prod">                    
            
         <p>referencia: </p>
         <input name="referencia" class="ref_pg_prod" value="<?php echo $selecionar_produtos['referencia'] ?>"> </article> 
       
        <p>Nome:</p>
        <input name="nome" class="ref_pg_prod" value="<?php echo $selecionar_produtos['nome'] ?>">

        <p>Nome Tecnico:</p>
        <input name="nome_tecnico" class="ref_pg_prod" value="<?php echo $selecionar_produtos['nome_tecnico'] ?>">
        
                   
        <p>Preço de Compra</p>
        <input name="preco_compra" class="ref_pg_prod"  value=" <?php echo $selecionar_produtos['preco_compra']; ?>">
                    
                                  
         <p>Preço de Venda </p> 
         <input name="preco" class="ref_pg_prod" value="<?php echo $selecionar_produtos['preco']; ?>">
                  

        <p>categoria:</p>
        <input name="categoria" class="ref_pg_prod" value="<?php echo $selecionar_produtos['categoria'] ?>">

        <p>fornecedor: </p>
        <input name="fornecedor" class="ref_pg_prod" value="<?php echo  $selecionar_produtos['fornecedor'] ?>">
   
        <p>fabricante:</p>
        <input name="fabricante" class="ref_pg_prod" value=" <?php echo $selecionar_produtos['fabricante'] ?>"> 
 
       

        <p>aplicação </p>  
        <input name="aplicacao" class="ref_pg_prod" value="<?php echo $selecionar_produtos['aplicacao'] ?>">
         
                   
         <p>quantidade</p>             
         <input name="quantidade" class="ref_pg_prod" value="<?php echo $selecionar_produtos['quantidade'] ?>">
           
     
         <p>qtde governo</p>           
         <input name="quantidade_governo" class="ref_pg_prod" value="<?php echo $selecionar_produtos['quantidade_governo'] ?>">
         
       
         <p>qtde minima</p>         
         <input name="quantidade_minima" class="ref_pg_prod" value="<?php echo $selecionar_produtos['quantidade_minima'] ?>">
            

         <p>Localização</p>           
         <input name="local" class="ref_pg_prod"  value="<?php echo $selecionar_produtos['local'] ?>">
   
    
    </div>

    </div>

    </div>


    </div> 

</form>




    <?php endif; ?>



    <?php if (isset($excluir)): //se houver id siginifica que existira alteração  ?>
<div class="form_excluir_produto">  
        <form class="excluir_form" method="POST" action="<?php URL_BASE ?>excluir?excluir=<?php echo $excluir ?>">

            <input class="i" name="preco" type="text" value="<?php echo $selecionar_produtos['preco'] ?>" placeholder="PREÇO">
            <input class="i" name="preco_compra" type="text" value="<?php echo $selecionar_produtos['preco_compra'] ?>" placeholder="PREÇO DE COMPRA">
            <input class="i" required=""   name="nome" type="text" value="<?php echo $selecionar_produtos['nome'] ?>" placeholder="NOME DO PRODUTO"><br>
            <input class="n"  type="text" name="nome_tecnico" value="<?php echo $selecionar_produtos['nome_tecnico'] ?>" placeholder="NOME TECNICO OU DA NOTA"><br>
            <input class="i" type="text"  name="local" value="<?php echo $selecionar_produtos['local'] ?>"  placeholder="LOCAL NO ESTOQUE">   
            <input class="i" type="text"  name="referencia" value="<?php echo $selecionar_produtos['referencia'] ?>"  placeholder="REFERENCIA">  
            <input class="i" type="text"  name="aplicacao" value="<?php echo $selecionar_produtos['aplicacao'] ?>"  placeholder="APLICAÇÃO EM VEICULOS"><br>  
            <input class="i" type="text"  name="quantidade"  value="<?php echo $selecionar_produtos['quantidade'] ?>" placeholder="QUANTIDADE">  
            <input class="i" type="text"   name="quantidade_governo" value="<?php echo $selecionar_produtos['quantidade_governo'] ?>" placeholder="QUANTIDADE GOVERNO">  
            <input class="i" type="text"   name="quantidade_minima" value="<?php echo $selecionar_produtos['quantidade_minima'] ?>" placeholder="QUANTIDADE MINIMA">   <br>
            <input class="i" type="text"   name="fornecedor" value="<?php echo $selecionar_produtos['fornecedor'] ?>" placeholder="FORNECEDOR">     
            <input class="i" type="text"   name="fabricante" value="<?php echo $selecionar_produtos['fabricante'] ?>" placeholder="FABRICANTE">   
            <input class="i" type="text"   name="categoria" value="<?php echo $selecionar_produtos['categoria'] ?>" placeholder="CATEGORIA"><br>

            <input class="bt_prod_excluir" type="submit" value="Excluir"><br>


        </form>
        <br>
        </div>
    <?php endif; ?>
 





<br><br>

<!-- ----------------------------------AQUI COMEÇA A SEÇÃO DO ESTOQUE MINIMO------------------- -->
<?php if (!empty($estoque_minimo)) { ?> 
    <style>
    table{
        display:block;
    }
</style>
    <div class="lista_produtos estoque_min_personalizado">
        <!-- TEM QUE FICAR ANTES DO FOREACH PRA NÃO FICAR REPETINDO  -->
        <table  border="0" cellspacing="0">
            <thead>
                <tr>
                    <th>mais</th>
                    <th>ID</th>
                    <th>preco</th>

      <!-- <th>p. de compra</th>-->
                    <th>nome</th>
                    <!--<th>n. tecnico</th> -->
                  <!--  <th>local</th> -->
                    <th>referencia</th>
                    <th>aplicação</th>
                    <th>qtd</th>
                    <th>gov</th>
                    <th>min</th>
                    <!--<th>Total Produto</th> -->
                     <!--<th>fornecedor</th>-->
                     <!--<th>fabricante</th>-->
                     <!--<th>categoria</th>-->
                    <th>edição</th>
                    <th>apagão</th>
                </tr>
            </thead>
        <?php } ?>


        <?php if (isset($estoque_minimo)) {
            
            echo ("<p class='itens_falta_p'>Existem ".$total_itens_min[0][0]." Produtos em falta</p>");
            

            foreach ($estoque_minimo as $estoque_min):
                ?>

                   
                <tbody>
                    <tr  align=center>
                        <td class="cliente_ver" class="tamanho_caracteres"><a href="<?php echo URL_BASE; ?>produtos/ver?ver=<?php echo $estoque_min['id'] ?>" target="_blank">info</a></td>
                        <td class="tamanho_caracteres"> <?php echo $estoque_min['id'] ?> </td>
                        <td class="tamanho_caracteres" id="color_preco"> <?php echo 'R$ ' . number_format($estoque_min['preco'], 2, ',', '.'); ?> </td>
                        <!--<td> <?php echo $estoque_min['preco_compra'] ?> </td>-->
                        <td class="tamanho_caracteres"> <?php echo $estoque_min['nome'] ?> </td>
                       <!--  <td> <?php //echo $estoque_min['nome_tecnico']  ?> </td> -->
                         <!--   <td class="tamanho_caracteres"> <?php echo $estoque_min['local'] ?> </td> -->
                        <td class="tamanho_caracteres"> <?php echo $estoque_min['referencia'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $estoque_min['aplicacao'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $estoque_min['quantidade'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $estoque_min['quantidade_governo'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $estoque_min['quantidade_minima'] ?> </td>
                       <!-- <td> <?php echo $estoque_min['total_produto'] ?> </td>-->

                        <!-- <td> <?php echo $estoque_min['fornecedor'] ?> </td>-->
                        <!-- <td> <?php echo $estoque_min['fabricante'] ?> </td>-->
                        <!-- <td> <?php echo $estoque_min['categoria'] ?> </td> -->


                        <td class="cliente_editar" class="tamanho_caracteres"><a href="<?php echo URL_BASE; ?>produtos/editar?id=<?php echo $estoque_min['id'] ?>" target="_blank">Editar</a></td>
                        <td class="cliente_excluir" class="tamanho_caracteres"><a href="<?php echo URL_BASE; ?>produtos/excluir?excluir=<?php echo $estoque_min['id'] ?>" target="_blank">Excluir</a></td>




                    </tr>
                </tbody>


    <?php endforeach;
} ?>

    </table>

</div>

<!-- ----------------------------------AQUI TERMINA A SEÇÃO DO ESTOQUE MINIMO------------------- -->



<!-- ----------------------------------AQUI COMEÇA A SEÇÃO DO ESTOQUE GOVERNO------------------- -->
<?php if (!empty($estoque_gov)) echo ("<p class='itens_falta_p'>Existem ".$total_itens_gov[0][0]." Produtos mudar Gov</p>"); { ?> 
    <style>
    table{
        display:block;
    }
</style>
    <div class="lista_produtos estoque_min_personalizado">
        <!-- TEM QUE FICAR ANTES DO FOREACH PRA NÃO FICAR REPETINDO  -->
        <table  width="100%" border="0" cellspacing="0">
            <thead>
                <tr>
                    <th>mais</th>
                    <th>ID</th>
                    <th>preco</th>

      <!-- <th>p. de compra</th>-->
                    <th>nome</th>
                    <!--<th>n. tecnico</th> -->
                  <!--  <th>local</th> -->
                    <th>referencia</th>
                    <th>aplicação</th>
                    <th>qtd</th>
                    <th>gov</th>
                    <th>min</th>
                    <!--<th>total produto</th>-->
                     <!--<th>fornecedor</th>-->
                     <!--<th>fabricante</th>-->
                     <!--<th>categoria</th>-->
                    <th>edição</th>
                    <th>apagão</th>
                </tr>
            </thead>
        <?php } ?>


<?php if (isset($estoque_gov)) {
    foreach ($estoque_gov as $estoque_governo):
        ?>


                <tbody>
                    <tr  align=center>
                        <td class="cliente_ver"><a href="<?php echo URL_BASE; ?>produtos/ver?ver=<?php echo $estoque_governo['id'] ?> "target="_blank">info</a></td>

                        <td class="tamanho_caracteres"> <?php echo $estoque_governo['id'] ?> </td>
                        <td class="tamanho_caracteres" id="color_preco"> <?php echo 'R$ ' . number_format($estoque_governo['preco'], 2, ',', '.'); ?> </td>

        <!--<td> <?php echo $estoque_governo['preco_compra'] ?> </td>-->
                        <td class="tamanho_caracteres"> <?php echo $estoque_governo['nome'] ?> </td>
                       <!--  <td> <?php //echo $estoque_min['nome_tecnico']  ?> </td> -->
                      <!--   <td class=""> <?php echo $estoque_governo['local'] ?> </td> -->
                        <td class="tamanho_caracteres"> <?php echo $estoque_governo['referencia'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $estoque_governo['aplicacao'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $estoque_governo['quantidade'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $estoque_governo['quantidade_governo'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $estoque_governo['quantidade_minima'] ?> </td>
                        <!-- <td> <?php echo $estoque_governo['total_produto'] ?> </td>-->
                       <!-- <td> <?php echo $estoque_governo['fornecedor'] ?> </td>-->
                       <!-- <td> <?php echo $estoque_governo['fabricante'] ?> </td>-->
                       <!-- <td> <?php echo $estoque_governo['categoria'] ?> </td> -->


                        <td class="cliente_editar" class="tamanho_caracteres"><a href="<?php echo URL_BASE; ?>produtos/editar?id=<?php echo $estoque_governo['id'] ?>" target="_blank">Editar</a></td>
                        <td class="cliente_excluir" class="tamanho_caracteres"><a href="<?php echo URL_BASE; ?>produtos/excluir?excluir=<?php echo $estoque_governo['id'] ?>" target="_blank">Excluir</a></td>




                    </tr>
                </tbody>


    <?php endforeach;
} ?>

    </table>

</div>
<!-- ----------------------------------AQUI TERMINA A SEÇÃO DO ESTOQUE GOVERNO------------------- -->



















<div class="lista_prod_novo">

    <div class="comtem_quadros">

        <?php if (isset($categoria_eletrica))  { ?>  
            <style>
                 table{
                    display:none;
                 }
        </style>   
           <?php echo ("<p class='itens_elet_qt'>Existem ".$total_itens_elet[0][0]." Itens Eletricos</p>");?> 
           
        <?php foreach ($categoria_eletrica as $cat_eletrica): ?> 

            <a href="<?php echo URL_BASE; ?>produtos/ver?ver=<?php echo $cat_eletrica['id'] ?>" 
                target="_blank">
         
         
        <div class="prod_quadro">
               
                <article class="todos_itens_quadro_prod font_item1 n_f_n_p">
                    <?php echo $cat_eletrica['nome'] ?>
                 </article>  

                <article class="todos_itens_quadro_prod font_item2 n_f_nt_p">
                    <?php echo $cat_eletrica['nome_tecnico'] ?>
                
                </article>   

                <div class="imagem_prod_novo">
                    <img src="<?php echo URL_BASE; ?>midias/imagens/produtos/<?php echo $cat_eletrica['imagem']; ?>.jpg"">
                </div>
           
          
            
            <div class="todos_itens_quadro_prod preco_estilo_prod">            
                <div>
                    preço: <?php echo 'R$ ' . number_format($cat_eletrica['preco'], 2, ',', '.'); ?>
                </div>
            </div> 

             <div class="todos_itens_quadro_prod font_item1 estilo_ref">
                 Ref: <?php echo $cat_eletrica['referencia'] ?>
             </div>

            <div class="todos_itens_quadro_prod font_item3 estilo_aplic_p">
              Aplic: <?php echo $cat_eletrica['aplicacao'] ?>
            </div>

            <div class="todos_itens_quadro_prod font_item1 disponivel_estoque">
                disponivel: <?php echo $cat_eletrica['quantidade'] ?>
            </div>
                    
            <div class="todos_itens_quadro_prod font_item1 op">

                <a href="<?php echo URL_BASE; ?>produtos/editar?id=<?php echo $cat_eletrica['id'] ?>" target="_blank">
                Editar
                </a>
         
                <a href="<?php echo URL_BASE; ?>produtos/excluir?excluir=<?php echo $cat_eletrica['id'] ?>" target="_blank"> 
                Excluir
                </a>
            </div>

        </div>
        

        <?php endforeach; ?>
        </a>
    </div>
        
    <?php } ?>
</div>





<!-- 
AQUI INICIA A LISTAGEM DE PRODUTOS PARA O TERMO PESQUISADO ----- EM QUADRADOS -->
<?php if (isset($pesquisa_prod)) { ?>  
 <div class="lista_prod_novo">
    <div class="comtem_quadros">
         
          <style>
              body{
                  margin:0;
              }
              table{
                  display:none;
              }
          </style>     
        <?php foreach ($pesquisa_prod as $exibir_p): ?> 
            <a href="<?php echo URL_BASE; ?>produtos/ver?ver=<?php echo $exibir_p['id'] ?>" 
                target="_blank">
         
         
        <div class="prod_quadro">
               
                <article class="todos_itens_quadro_prod font_item1 n_f_n_p"><?php echo $exibir_p['nome'] ?> </article>  
                <article class="todos_itens_quadro_prod font_item2 n_f_nt_p"><?php echo $exibir_p['nome_tecnico'] ?></article>   

                <div class="imagem_prod_novo">
                    <img src="<?php echo URL_BASE; ?>midias/imagens/produtos/<?php echo $exibir_p['imagem']; ?>.jpg"">
                </div>
           
          
         
         <div class="todos_itens_quadro_prod preco_estilo_prod">            
            <div font_item2>preço: <?php echo 'R$ ' . number_format($exibir_p['preco'], 2, ',', '.'); ?></div>
        </div> 

          <div class="todos_itens_quadro_prod font_item1 estilo_ref">Ref: <?php echo $exibir_p['referencia'] ?></div>
          <div class="todos_itens_quadro_prod font_item3 estilo_aplic_p">Aplic: <?php echo $exibir_p['aplicacao'] ?></div>
          <div class="todos_itens_quadro_prod font_item1 disponivel_estoque">disponivel: <?php echo $exibir_p['quantidade'] ?></div>
                    
         <div class="todos_itens_quadro_prod font_item1 op">
         <a href="<?php echo URL_BASE; ?>produtos/editar?id=<?php echo $exibir_p['id'] ?>" target="_blank">Editar</a>
         
            <a href="<?php echo URL_BASE; ?>produtos/excluir?excluir=<?php echo $exibir_p['id'] ?>" target="_blank">Excluir</a>
         </div>
         </div>
        

        <?php endforeach; ?>
        </a>
        </div>
        
        <?php } ?>
    </div>
 

    <!-- AQUI TERMINA A LISTAGEM DE PRODUTOS PARA O TERMO PESQUISADO ----- EM QUADRADOS -->





</div>



