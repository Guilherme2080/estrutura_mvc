
<div class="nt_impressa_cupom cor_corpont">
    <br> <div class="nt_topo">
    
    <h6>Lourenço Auto Peças</h6> 
    
   
       
 <hr>
 
        <h5>Lourenço Auto Peças <br> CNPJ : 1721775600091</h5>
        <h3>Boca da Mata - AL Contato: 996857745<br> CEP:57680000 </h3>
        <h4> Rua Genauro Vieira de Almeida<br> Cliente: 
           

    </div>
    <hr>
    <div class="nt_corpo">

        <table width="100%" >
            <thead>
                <tr>
                    <th>PREÇO DO SERVICO</th>
                    <th class="remover">DATA</th>                       

                </tr>
            </thead>


            <div class="dt_emissao">

            </div>



  
        </table>
      <hr>

        <div class="total_geral">    
 <?php echo "NOME  DO CARRO: ".($lst_servicos['nome_carro']) ?><br><br>
 <?php echo "NOME  DO CLIENTE: ".($lst_servicos['nome_cliente']) ?><br><br>
 <?php echo "PLACA: ".($lst_servicos['placa']) ?><br><br>
 <?php echo "TELEFONE: ".($lst_servicos['telefone']) ?><br><br>
 <?php echo "DATA CHEGADA: ".($lst_servicos['data_chegada']) ?><br><br>
 <?php echo "DATA SAIDA: ".($lst_servicos['data_saida']) ?><br><br>
 <?php echo "NOME DO SERVIÇO: ".($lst_servicos['nome_servico']) ?><br><br>
 
            
<?php echo "VALOR DO SERVICO" . "  " . "  " . ' R$ ' . number_format($lst_servicos['preco_servico'], 2, ',', '.') ?>
        </div>
       
    </div>
 


<hr>

<div class="logo_nt">
    <br>
    <img src="<?php echo URL_BASE;?>midias/imagens/logo-favicon.jpg">
    <br>
</div>


<br>

<hr>
<br>
<br>
</div>

<div class="bt_serv_cupom">
   <input type="button" class="remover" value="IMPRIMIR CUPOM" onClick="window.print()"/> 
</div>

