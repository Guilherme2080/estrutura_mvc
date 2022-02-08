<div class="nt_impressa_cupom">
    <br> <div class="nt_topo">
    
    <?php  echo date("d/m/Y"); ?>
        <h6>Lourenço Auto Peças</h6> 
    
   
       
 <hr>
 
        <h5>Lourenço Auto Peças <br> CNPJ : 1721775600091</h5>
        <h3>Boca da Mata - AL Contato: 996857745<br> CEP:57680000 </h3>
        <h4> Rua Genauro Vieira de Almeida<br> Cliente: <?php echo $nota[0]['nome']; ?> </h4>
        <h4>Nota: <?php echo $aleatorio ?> </h4> 

    </div>
    <hr>
    <div class="nt_corpo">

        <table width="100%" >
            <thead>
                <tr>
                    <th>DESCRIÇÃO</th>
                    <th class="remover">ID PRODUTO</th>
                    <th>QTDE</th>
                    <th>VALOR</th>
                    <th>V.TOTAL</th>
                    <th class="remover">DATA</th>                       

                </tr>
            </thead>


            <div class="dt_emissao">

            </div>


            <?php
            if (isset($nota)) {
                foreach ($nota as $not):
                    ?>    

                    <tbody>

                        <tr align="center">
                            <td><?php echo $not['nome_produto'] ?> </td>
                            <td class="remover"><?php echo $not['id_produto'] ?> </td>
                            <td> <?php echo $not['quantidade'] ?>  </td>
                            <td>   <?php echo $not['preco'] ?>          </td>
                            <td class="reduzir"> <?php echo 'R$' . number_format($not['valor_total'], 2, ',', '.') ?> </td>
                            <td class="remover" > <?php echo date("d/m/Y H:i:s", strtotime($not['data'])); ?>  </td>
                           

                        </tr>
                      
                    </tbody>




    <?php endforeach;
} ?>  






  
        </table>
      <hr>

        <div class="total_geral">    
           
<?php echo "TOTAL DA NOTA" . "  " . "  " . ' R$ ' . number_format($soma_geral['total_geral'], 2, ',', '.') ?>
        </div>
       
    </div>
 


<hr>

<div class="logo_nt">
    <br>
    <img src="<?php echo URL_BASE;?>midias/imagens/logo-favicon.jpg">
    <br>
</div>


<br>
<div class="observacao">
   24 horas para devolução<br>
somente com apresentacao da nota<br> 
<br>
<div class="data_nt">
   <?php  echo date("d/m/Y"); ?>
    
</div>

</div>

<hr>
<br>
<br>
</div>

<div class="bt_cupom">
 <input type="button" class="remover" value="IMPRIMIR CUPOM" onClick="window.print()"/>   
</div>

