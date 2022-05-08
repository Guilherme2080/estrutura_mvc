<div class="limites_emp_disp">

    <h5 class="estilo_h5_limite"> Cliente: <?php echo " " . @$nota[0]['nome']; ?></h5>
    <h5 class="estilo_h5_limite"> Telefone: <?php echo @$nota[0]['telefone']; ?> </h5>
    <h5 class="estilo_h5_limite"> Placa: <?php echo @$nota[0]['placa']; ?> </h5>
    <h5 class="estilo_h5_limite"> Endereço: <?php echo @$nota[0]['endereco']; ?> </h5>
    <h5 class="estilo_h5_limite"> Observação:<?php echo @$nota[0]['observacao']; ?> </h5>

</div>



<br>

<div class="pesquisa_prod remover">
    <form method="POST" action="<?php echo URL_BASE ?>clientes/ver?ver=<?php echo $ver ?>">
        <input class="ip_pe" name="pesquisa1" placeholder="Pesquise por Nome do Produto, Referencia ou Aplicação">
        <input class="bt_pe" type="submit" value=""><br>
    </form>
</div>




<div class="pesquisa_produto remover barra_de_rolagem">

    <table width="100%" border="0" cellspacing="0">
        <?php if (isset($pesquisa1)) {  ?>


            <style>
                .barra_de_rolagem {
                    overflow-y: auto;
                    height: 200px;
                }
            </style>



        <?php } ?>

        <!-- --------------------------AQUI É FEITO A PESQUISA PARA INSERÇÃO ----------------------------- -->
        <?php if (isset($pesquisa1)) {

            echo "
        <h4 class='mensagem_inser_prod1'>
           * O Numero de ID é clicavel, 
            ao clicar nele os campos serõa 
            preenchidos automaticamente restando
            apenas o preenchimento da quantidade 
        </h4>
        <h6 class='mensagem_inser_prod2'>
           * O Nome do produto é clicavel, 
            ao clicar nele será aberto a página 
            do produto
        </h6>

        ";

            foreach ($pesquisa1 as $pesquisa) : ?>


                <tbody>
                    <tr align=center>
                        <td class="passar_mouse" onclick="enviar(<?php echo $pesquisa['id'] ?>, '<?php echo $pesquisa['nome'] ?>',<?php echo $pesquisa['preco'] ?>)"> <?php echo $pesquisa['id'] ?> </td>

                        <td><a href="<?php echo URL_BASE; ?>produtos/ver?ver=<?php echo $pesquisa['id'] ?>" target="_blank" title="Clique para ver a página do produto"> <?php echo $pesquisa['nome'] ?> </a> </td>
                        <td id="nome_prod"> <?php echo $pesquisa['quantidade'] ?> </td>

                        <td id="pequenar"> <?php echo $pesquisa['local'] ?> </td>
                        <td id="p_preco" onclick="enviar(<?php echo $pesquisa['preco'] ?>)"> <?php echo $pesquisa['preco'] ?> </td>
                        <td id="pequenar"> <?php echo $pesquisa['referencia'] ?> </td>
                        <td id="pequenar"> <?php echo $pesquisa['aplicacao'] ?> </td>


                    </tr>

                </tbody>


        <?php endforeach;
        } ?>

    </table>
</div>
<br>
<!-- --------------------------AQUI PRA CIMA É FEITO A PESQUISA PARA INSERÇÃO ----------------------------- -->





<div class="nota_cliente">



    <!-- Exibe o nome do cliente que é recebido na funcao public function ver() no arquivo clientesControle
lá também é atribuida a variavel e enviada dentro do array, a configuracao do mvc
faz o indice do array torna-se variavel visivel aqui-->


    <!-- dentro ainda da funcao public function ver() no arquivo clientesControle é feita 
as verificaçãoes para edicao onde essa variavel $editar é recebida via GET, caso o usuario dejese fazer 
uma edição, nesse caso ela está vazia , logo será feita a inserção e não a edição
-->



    <?php if (empty($editar)) { ?>




        <div class="inserir_produto">


            <form method="POST" action="<?php echo URL_BASE ?>clientes/ver?ver=<?php echo $ver ?>">

                <input id="recebe_nome" name="nome_produto" type="text" placeholder="NOME DO PRODUTO">
                <input id="recebe_id" name="id_produto" type="text" placeholder="N. DE ID DO PRODUTO">
                <input type="text" name="quantidade" placeholder="QUANTIDADE">
                <input id="recebe_preco" type="text" name="preco" placeholder="PREÇO">
                <input class="bt_inserir_n" type="submit" value="INSERIR NA NOTA"><br>


            </form>

            <br>
        </div>




    <?php } ?>





    <!-- Aqui a variavel $editar não está vazia logo se segue o processo para a edição -->
    <?php if (!empty($editar)) { ?>

        <div class="inserir_produto">
            <form method="POST" action="<?php echo URL_BASE ?>clientes/ver?ver=<?php echo $ver ?>&editar=<?php echo $editar ?>">

                <input required="" name="nome_produto_edit" value="<?php echo $exibir_edicao['nome_produto'] ?>" type="text" placeholder="NOME DO PRODUTO">
                <input name="id_produto_edit" value="<?php echo $exibir_edicao['id_produto'] ?>" type="text" placeholder="NUMERO DO ID DO PRODUTO">
                <input type="text" name="quantidade_edit" value="<?php echo $exibir_edicao['quantidade'] ?>" placeholder="QUANTIDADE">
                <input type="text" name="preco_edit" value="<?php echo $exibir_edicao['preco'] ?>" placeholder="PREÇO">

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

        <img src="<?php echo URL_BASE; ?>midias/imagens/logo.jpg">
        <h5>Lourenço Auto Peças CNPJ : 1721775600091</h5>
        <h3>Boca da Mata - AL Contato: 996857745 CEP:57680000 </h3><br>
        <h4> Rua Genauro Vieira de Almeida Cliente: <?php echo $nota[0]['nome']; ?> </h4>
        <h4>Nota: <?php echo $aleatorio ?> </h4>

    </div>

    <div class="nt_corpo_ ">

        <table width="100%">
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





            <?php if (isset($nota)) {
                foreach ($nota as $not) :
            ?>

                    <tbody>
                        <tr align="center">
                            <td><?php echo $not['nome_produto'] ?> </td>
                            <td class="remover"><?php echo $not['id_produto'] ?> </td>
                            <td> <?php echo $not['quantidade'] ?> </td>
                            <td> <?php echo $not['preco'] ?> </td>
                            <td> <?php echo 'R$' . number_format($not['valor_total'], 2, ',', '.') ?> </td>
                            <td> <?php echo date("d/m/Y H:i:s", strtotime($not['data'])); ?> </td>
                            <td><a style="background:#7CB2D5; border-radius:2px; color:#fff;" href="<?php echo URL_BASE; ?>clientes/ver?ver=<?php echo $ver ?>&editar=<?php echo $not['id'] ?>">DEVOLVER</a></td>
                            <td> <a style="background-color: #5CB85C; border-radius:2px; color:#fff;" href="<?php echo URL_BASE; ?>clientes/ver?ver=<?php echo $ver ?>&excluir=<?php echo $not['id'] ?>">SÓ APAGAR</a></td>

                        </tr>
                    </tbody>




            <?php endforeach;
            } ?>



        </table>
        <div class="total_geral n_meio">
            <?php echo "TOTAL DA NOTA " . ' R$ ' . number_format($soma_geral['total_geral'], 2, ',', '.') ?>
        </div>

    </div>

    <div class="nt_topo">


        <p>

            A GARANTIA PARA PEÇAS E SERVIÇOS É DE 90 DIAS !!!
            INDEPENDENTEMENTE DE QUALQUER COISA..
            ** É NECESSARIO APRESENTAR A NOTA NO PRAZO !!!
            OBS: Garantia ou troca Somente com apresentação desta Nota !!!

        </p>

        <div>
            Código de Defesa do Consumidor – Lei 8.078/90

        </div>
        <br>

    </div>
    <div  class="tipo_d_nota n_imprimir">

        <label for="marcas">QUE TIPO É ESSA NOTA ?:</label>

        <select onchange="tipo()" name="marcas" id="tipodenota">
            <option selected value="">SELECIONE</option>
            <option value="pag">JÁ PAGA</option>
            <option value="orc">ORCAMENTO</option>
            <option value="dev">FIADO</option>

        </select>

    </div>


    <div class="carimbo">
            <br>
        <h3> TOTALMENTE PAGO</h3>
        <h4><?php echo date("d/m/Y"); ?></h4>
        <h5>Assinatura do conferente____________________</h5>
        
    </div>
    


    <div class="carimbo1">


        <h3>
            * atenção!! Isso é um orçamento os valores podem ser alterados
            hojé é dia: <?php echo date("d/m/Y"); ?>

        </h3>



    </div>

    <div class="carimbo2">

        <h3>Venda a prazo</h3>
        <h4>Assinatura do devedor__________________________________________________________________________________________________________________________________
        </h4>


    </div>


</div>

<input class="remover bt_imprimir" type="button" value="IMPRIMIR" onClick="window.print()" />


<a class="remover bt_imp_cupom" href="<?php echo URL_BASE; ?>cupom?ver=<?php echo $ver ?>">CUPOM</a>





<!-- <div class="historico" id="mostra">
        
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
             <?php echo "TOTAL DO HISTORICO " . ' R$ ' . number_format($soma_geral_historico['total_geral_historico'], 2, ',', '.') ?>
         </div>
        
        
            <?php
            if (isset($nota_historico)) {
                foreach ($nota_historico as $nota) :
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
     
 <?php endforeach;
            } ?>  
        </table>

  
     

    
</div> -->











<a class="bt_historico remover" href="#abrirModal">Historico do cliente</a>
<div id="abrirModal" class="modal">
    <a href="#fechar" title="Fechar" class="fechar">X</a><br>
    <div class="historico">

        <table align=center>
            <thead>
                <tr>
                    <th>DESCRIÇÃO</th>
                    <th>QTDE</th>
                    <th>VALOR</th>
                    <th>V.TOTAL</th>
                    <th>DATA</th>

                </tr>
            </thead>



            <h4 class="n_historico">

                <?php echo "<p>Comprou conosco" .
                    '<br> R$ ' . number_format($soma_geral_historico['total_geral_historico'], 2, ',', '.') . '</p> ' ?>

            </h4>




            <?php
            if (isset($nota_historico)) {
                foreach ($nota_historico as $nota) :
            ?>


                    <tbody>

                        <tr align="center">
                            <td class="tm_desc"><?php echo $nota['nome_produto'] ?> </td>
                            <td> <?php echo $nota['quantidade'] ?> </td>
                            <td> <?php echo $nota['preco'] ?> </td>
                            <td> <?php echo 'R$' . number_format($nota['valor_total'], 2, ',', '.') ?> </td>
                            <td> <?php echo date("d/m/Y H:i:s", strtotime($nota['data'])); ?> </td>

                        </tr>

                    </tbody>

            <?php endforeach;
            } ?>
        </table>





    </div>









</div>
<a class="remover bt_apagar" href="<?php echo URL_BASE; ?>clientes/ver?ver=<?php echo $ver ?>&excluir_tudo=<?php echo $ver ?>">Limpar tudo</a>