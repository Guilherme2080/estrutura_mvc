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

<div class="estoq_ab">
    

<div class="estoque_baixo remover">
    <form method="POST" action="<?php echo URL_BASE ?>produtos">                
        <input name="estoque_minimo"  type="submit" value="ESTOQUE BAIXO">              
    </form>      

</div>
<div class="estoque_alto remover">
    <form method="POST" action="<?php echo URL_BASE ?>produtos">                
        <input name="estoque_gov" type="submit" value="ESTOQUE ALTO GOV">               
    </form> 

</div>
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
<?php if (isset($id)): //se houver id siginifica que existira alteração  ?>


    <div class="form_editar_produto">     



        <form class="edit_form" enctype="multipart/form-data" method="POST" action="<?php URL_BASE ?>editar?id=<?php echo $id ?>">
        

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
        </form><br>

</div> 



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
 





<br>






<div class="opcoes_lst_prod">
  <!--  <p>Total - Venda <?php // echo 'R$ '.number_format($total_venda[0][0], 2, ',', '.');  ?></p> -->
    <!-- <p>Total - Compra <?php //echo 'R$ '.number_format($total_compra[0][0], 2, ',', '.');  ?></p> -->           
    <?php if (isset($total_itens)): ?>  

        <p>Total de Produtos: <?php echo $total_itens[0][0]; ?></p> 

    <?php endif; ?>

<!-- <p>Preço de Venda - Total  <?php //echo 'R$ '.number_format($soma_total_prod[0][0], 2, ',', '.');  ?></p>   -->
 <!-- <p>Preço de Compra - Total <?php //echo 'R$ '.number_format($soma_total_prod_compra[0][0], 2, ',', '.');  ?></p>   -->




</div>




<br>
<?php if (isset($estoque_minimo)) { ?> 
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












<?php if (isset($estoque_gov)) { ?> 
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








<!--               
<div class="lista_produtos">    
     
<?php //  if(!isset($pesquisa_prod) && !isset($estoque_minimo) && !isset($estoque_gov)){   ?> 
<table width="100%" border="0" cellspacing="0">

  <!-- <input id="filtro-nome" placeholder="buscar por nome"> -->
  <!-- <input id="filtro-referencia" placeholder="buscar por referencia"> -->
<!--  

 <br>
      <thead>
             <tr >
                  <th>ver</th>
                  <th>ID</th>
                 <th><div>Nome</div><div></div></th>
                 <th class="diminuir">preco</th>
                 <!--<th class="diminuir">p. de compra</th>-->

  <!--  <th>n. tecnico</th> -->
<!--  <th class="diminuir">local</th>
   <th><div>Referencia</div><div></div></th>
   <th class="diminuir">aplicação</th>
  <th>qtd</th>
  <th >qtde governo</th>
  <th>qtde minima</th>
  <!--<th>Total Produto</th>-->
  <!--<th class="diminuir">fornecedor</th>-->
  <!--<th class="diminuir">fabricante</th>-->
  <!--<th class="diminuir">categoria</th>-->
<!--  <th>editar</th>
  <th>excluir</th>
</tr>

</thead>





<?php // foreach ($exibir as $exibir_prod):  ?>

<tbody>
  <tr  align=center>
       <td class="diminuir_g"><a href="<?php //echo URL_BASE; ?>produtos/ver?ver=<?php echo $exibir_prod['id'] ?>"><img class="hvr-wobble-skew" src="<?php echo URL_BASE; ?>midias/imagens/ver.png" ></a></td>
      
       <td class="diminuir_g"> <?php //echo $exibir_prod['id']  ?> </td>                         
       <td class="diminuir_g"> <?php // echo $exibir_prod['nome']  ?> </td>                         
      <td> <?php // echo 'R$ '.number_format($exibir_prod['preco'], 2, ',', '.');  ?> </td>
      <!--<td> <?php // //echo 'R$ '.number_format($exibir_prod['preco_compra'], 2, ',', '.');   ?> </td>   -->                    
     <!--  <td> <?php // //echo $exibir_prod['nome_tecnico']  ?> </td> -->
     <!-- <td class="diminuir"> <?php // echo $exibir_prod['local']  ?> </td>
      <td class="diminuir_g"> <?php // echo $exibir_prod['referencia']  ?> </td>
      <td class="diminuir_g"> <?php // echo $exibir_prod['aplicacao']  ?> </td>
      <td class="diminuir"> <?php //echo $exibir_prod['quantidade']  ?> </td>
      <td class="diminuir_g"> <?php // echo $exibir_prod['quantidade_governo']  ?> </td>
      <td class="diminuir_g"> <?php // echo $exibir_prod['quantidade_minima']  ?> </td>
     <!-- <td class="diminuir_g"> <?php //echo $exibir_prod['total_produto']  ?> </td>-->
       <!--<td class="diminuir"> <?php // echo $exibir_prod['fornecedor']  ?> </td>-->
       <!--<td class="diminuir"> <?php // echo $exibir_prod['fabricante']  ?> </td>-->
       <!--<td class="diminuir"> <?php //echo $exibir_prod['categoria']  ?> </td> -->


                        <!--<td><a href="<?php // echo URL_BASE;  ?>produtos/editar?id=<?php // echo $exibir_prod['id']  ?>"><img class="hvr-wobble-skew" src="<?php //echo URL_BASE;  ?>midias/imagens/editar.png" ></a></td>
                        <td><a href="<?php //echo URL_BASE;  ?>produtos/excluir?excluir=<?php //echo $exibir_prod['id']  ?>"><img class="hvr-wobble-skew" src="<?php // echo URL_BASE;  ?>midias/imagens/excluir.png" ></a></td>
                       



-->
</tr>
</tbody>
<?php // endforeach; ?>

</table>

<?php // }  ?>







<div class="lista_produtos">    
    <!-- SE EXISTIR ALGO DIGITADO NA PESQUISA MOSTRA O RESULTADO -->    
<?php if (isset($pesquisa_prod)) { ?> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">   
        <table width="100%" border="0" cellspacing="0">

      <!-- <input id="filtro-nome" placeholder="buscar por nome"> -->
      <!-- <input id="filtro-referencia" placeholder="buscar por referencia"> -->


            <br>
            <thead>
                <tr >
                    <th class="diminuir">mais</th>
                    <!-- <th>id</th> -->
                    <th><div>Nome</div><div></div></th>
                    <th class="diminuir">preco</th>
                    <!--<th class="diminuir">p. de compra</th>-->

      <!--<th>n. tecnico</th>-->
                    <th class="diminuir">Foto</th>
                    <th><div>Ref</div><div></div></th>
                    <th class="diminuir">aplicação</th>
                    <th>qtd</th>
                    <th>gov</th>
                    <th>min</th>
                   <!-- <th>Total Produto</th>-->
                     <!--<th class="diminuir">fornecedor</th>-->
                     <!--<th class="diminuir">fabricante</th>-->
                    <!-- <th class="diminuir">categoria</th>-->
                    <th>Edição</th>
                    <th>apagão</th>
                </tr>

            </thead>






    <?php foreach ($pesquisa_prod as $exibir_p): ?>




                <tbody>







                    <tr  align=center>
                        <td class="cliente_ver"><a href="<?php echo URL_BASE; ?>produtos/ver?ver=<?php echo $exibir_p['id'] ?>" target="_blank">info</a></td>
                       <!-- <td> <?php // echo $exibir_p['id']  ?> </td> -->
                        <td class="tamanho_caracteres"> <?php echo $exibir_p['nome'] ?> </td>                         
                        <td class="tamanho_caracteres" id="color_preco"> <?php echo 'R$ ' . number_format($exibir_p['preco'], 2, ',', '.'); ?> </td>
                        <!--<td> <?php // echo 'R$ '.number_format($exibir_p['preco_compra'], 2, ',', '.');   ?> </td>  -->                     
                       <!-- <td> <?php //echo $exibir_p['nome_tecnico']  ?> </td>-->


        <!-- <td class="diminuir"> <?php // echo $exibir_p['local']  ?> </td> -->






                        <td>  


                            <img src="<?php echo URL_BASE; ?>midias/imagens/produtos/<?php echo $exibir_p['imagem']; ?>.jpg" style="width:40%;cursor:zoom-in"
                                 onclick="document.getElementById('modal01').style.display = 'block'">



                        </td>

                        <td class="tamanho_caracteres"> <?php echo $exibir_p['referencia'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $exibir_p['aplicacao'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $exibir_p['quantidade'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $exibir_p['quantidade_governo'] ?> </td>
                        <td class="tamanho_caracteres"> <?php echo $exibir_p['quantidade_minima'] ?> </td>
                        <!--<td class="diminuir"> <?php echo $exibir_p['total_produto'] ?> </td>-->
                       <!-- <td class="diminuir"> <?php //echo $exibir_p['fornecedor']  ?> </td> -->
                       <!-- <td class="diminuir"> <?php echo $exibir_p['fabricante'] ?> </td> -->
                       <!-- <td class="diminuir"> <?php echo $exibir_p['categoria'] ?> </td> -->


                        <td class="cliente_editar" class="tamanho_caracteres"><a href="<?php echo URL_BASE; ?>produtos/editar?id=<?php echo $exibir_p['id'] ?>" target="_blank">Editar</a></td>
                        <td class="cliente_excluir" class="tamanho_caracteres"><a href="<?php echo URL_BASE; ?>produtos/excluir?excluir=<?php echo $exibir_p['id'] ?>" target="_blank">Excluir</a></td>







                    </tr>



                </tbody>






            <?php endforeach; ?>



    <?php if (count($pesquisa_prod) == 1): ?>




                <div class="w3-container">               



                    <div id="modal01" class="w3-modal" onclick="this.style.display = 'none'">
                        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                        <div class="w3-modal-content w3-animate-zoom">




                            <img src="<?php URL_BASE; ?>midias/imagens/produtos/<?php echo $exibir_p['imagem']; ?>.jpg" style="width:100%">


                        </div>
                    </div>


                </div>   


    <?php endif; ?>     




        </table>

<?php } ?>

</div>


<script type="text/javascript">

    var filtro = document.getElementById('filtro-nome');
    var tabela = document.getElementById('lista');
    filtro.onkeyup = function () {
        var nomeFiltro = filtro.value;
        for (var i = 1; i < tabela.rows.length; i++) {
            var conteudoCelula = tabela.rows[i].cells[0].innerText;
            var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
            tabela.rows[i].style.display = corresponde ? '' : 'none';
        }
    };

    var filtro_ref = document.getElementById('filtro-referencia');
    var tabela_ref = document.getElementById('lista');
    filtro_ref.onkeyup = function () {
        var nomeFiltroReferencia = filtro_ref.value;
        for (var i = 1; i < tabela_ref.rows.length; i++) {
            var conteudoCelula = tabela_ref.rows[i].cells[5].innerText;
            var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltroReferencia) >= 0;
            tabela_ref.rows[i].style.display = corresponde ? '' : 'none';
        }
    };



</script>


</div>



