
<?php  
@$maximo = 64.800;
$url = ($_SERVER['REQUEST_URI']); 
  $url_final = explode("/", $url);
    
?>
<?php if($url_final[1] == "caixa"){ ?>

<style>
    .ca_sele{        
        float: left;
        line-height: 50px;
        padding-left: 10px;
        padding-right: 10px;
        background-color: #098aaa;
    }
</style>

<?php  }?>

<h5>Restante Guilherme: R$<?php @print_r(number_format($somanfegui[0][0], 2, ',', '.')-$maximo); ?> </h5> 
<h5>Restante Natalia: R$<?php @print_r(number_format($somanfenatt[0][0], 2, ',', '.')-$maximo); ?> </h5> 
<h5>Restante Irani: R$<?php @print_r(number_format($somanfeirani[0][0], 2, ',', '.')-$maximo); ?> </h5> 



<div class="pg_caixa">

<!-- ------------------------------INSERÇÃO DOS DADOS ---------------------------------------- -->
    <div class="main_caixa">
        <div class="manter_layout_caixa">
        <form method="POST"  action="<?php URL_BASE ?>caixa">

        <div class="option_caixa alinha_inputs_data" id="selecionar_tipo">
                    <p>tipo</p>
                    
                    <select onchange="inserirSinal(this)"  name="tipo" >
                    <option>Escolha um tipo</option>
                    
                    <option value="nfe">NFE de Compra</option>
                    <option  value="dinheiro">Dinheiro</option>
                    <option value="cartao">Cartao</option>
                    <option value="boleto">Boleto pra pagar</option>
                    

                </select>
        </div>

        <div class="option_caixa alinha_inputs_data">
                    <p>Empresa</p>
                    
                    <select  name="tipo_empresa" >
                        <option>Escolha a empresa</option>
                        
                        <option value="gui">Guilherme</option>
                        <option  value="irani">Irani</option>
                        <option value="natt">Natalia</option>
                                        
                    </select>
        </div>


            <div class="data_caixa alinha_inputs_data inputs_inser_caixa">
                <p>Data de hoje</p>
                <input type="text" name="data_caixa" id="data_hoje" value="<?php  echo date("d-m-Y") ?>">
            </div>
            
            <div class="data_vencimento alinha_inputs_data inputs_inser_caixa" id="data_vencimento">
                <p>Data do documento</p>
                <input type="text" onchange="datas()" name="data_vencimento" id="d_vencimento" value="<?php  echo date("d-m-Y") ?>">
            </div>
        
            <div class="valor_caixa alinha_inputs_data inputs_inser_caixa" >
                <p>Valor</p>
                <input type="text" name="valor_caixa" id="valor_caixa">
            </div>

            
            <div class="desc_caixa alinha_inputs_data inputs_inser_caixa">
                <p>descrição </p>
                <input  type="text" name="descricao_caixa">
            </div>

            
        
                <div class="inputs_inser_caixa tamanho_checkbox_caixa">

                    <input type="checkbox" id="checked_lancamento"  name="lancamento_futuro"> 
                    <label  for="lancamento_futuro">lançar apenas no futuro</label>
                

                </div>

            <div class="bt_enviar_caixa alinha_inputs_data inputs_inser_caixa estilo_bt_env_caixa">
                
                <input type="submit">
            </div>
            


        </form>
        </div>

<!-- ------------------------------ FIM DA INSERÇÃO DOS DADOS ---------------------------------------- -->





        <!-- --------------------------------------------------EXIBIÇÃO DOS DADOS -----------------------------           -->
        <div class="exibir_soma"  <?php if($soma_caixa[0][0] < 0){ ?> id="exibir_soma_negativa"; style=".exibir_soma{display:none;}" <?php } ?>  >
            <p>Saldo em Caixa:  R$ <?php  echo $soma_caixa[0][0]; ?></p>
        </div>


        <div class="tabela_caixa cor_a_lancar_caixa estilo_componentes_alancar">

         <h3 class="h3_tabel_a_lancar">Itens Aguardando a data de lançamento</h3>
         <table id="lista"  border="0" cellspacing="0">
                        <thead>
                            <tr>

                                <th>Empresa</th>
                                <th>data</th>
                                <th>data vencimento</th>
                                <th>descricao</th>
                                <th>valor</th>
                                <th>tipo</th>
                                <th>Apagar</th>
                                <th>Lançar</th>
                            
                            </tr>
                        </thead>
                <?php 
                if(isset($resultado_caixa_lancamento)){

                    foreach($resultado_caixa_lancamento as $result_caixa_lanc):?>  
                    
            
                        <tbody>
                            <tr  align=center>
                                <td> <?php echo $result_caixa_lanc['tipo_empresa']?> </td>
                                <td style="border-radius: 4px 0px 0px 4px ;"> <?php echo $result_caixa_lanc['data']?> </td>
                                <td> <?php echo $result_caixa_lanc['data_vencimento']?> </td>
                                <td> <?php echo $result_caixa_lanc['descricao']?> </td>
                                <td> <?php echo $result_caixa_lanc['valor']?> </td>
                                <td> <?php echo $result_caixa_lanc['tipo']?> </td>
                                <!-- <td><a href="<?php echo URL_BASE;?>caixa/excluir?excluir=<?php echo $result_caixa['id']?>">Excluir</a></td>
                                <a href="excluir.php" onclick="return confirm('Deseja excluir esse registro ?')">Excluir</a> -->
                                <td class="bt_excluir_caixa"><a href="<?php echo URL_BASE;?>caixa/excluir?excluir_lanc=<?php echo $result_caixa_lanc['id']?>" onclick="return confirm('Deseja excluir o registro : <?php echo $result_caixa_lanc['descricao'] ?>??')">Excluir</a></td>
                                <td class="bt_lancar_caixa" style="border-radius: 0px 4px 4px 0px ;"><a href="<?php echo URL_BASE;?>caixa/lancar?lancar=<?php echo $result_caixa_lanc['id']?>" onclick="return confirm('Deseja Lançar : <?php echo $result_caixa_lanc['descricao'] ?>??')">Lançar</a></td>  
                                                            
                            </tr>
                    </tbody>
                <?php  endforeach;     }  ?>
                
                
                            
         
            
            </table>
        
        </div>






        <div class="tabela_caixa estilo_componentes_lancados">

         <h3>Itens lançados</h3>
         <table id="lista"  border="0" cellspacing="0">
                        <thead>
                            <tr>

                                <th>empresa</th>
                                <th>data</th>
                                <th>data vencimento</th>
                                <th>descricao</th>
                                <th>valor</th>
                                <th>tipo</th>
                                <th>Apagar</th>
                            
                            </tr>
                        </thead>
                <?php 
                if(isset($resultado_caixa)){

                    foreach($resultado_caixa as $result_caixa):?>  
                    
            
                        <tbody>
                            <tr  align=center>

                                <td> <?php echo $result_caixa['tipo_empresa']?> </td>
                                <td> <?php echo $result_caixa['data']?> </td>
                                <td> <?php echo $result_caixa['data_vencimento']?> </td>
                                <td> <?php echo $result_caixa['descricao']?> </td>
                                <td> <?php echo $result_caixa['valor']?> </td>
                                <td> <?php echo $result_caixa['tipo']?> </td>
                                <!-- <td><a href="<?php echo URL_BASE;?>caixa/excluir?excluir=<?php echo $result_caixa['id']?>">Excluir</a></td>
                                <a href="excluir.php" onclick="return confirm('Deseja excluir esse registro ?')">Excluir</a> -->
                                <td class="bt_excluir_caixa"><a href="<?php echo URL_BASE;?>caixa/excluir?excluir=<?php echo $result_caixa['id']?>" onclick="return confirm('Deseja excluir o registro : <?php echo $result_caixa['descricao'] ?>')">Excluir</a></td>  
                                                            
                            </tr>
                    </tbody>
                <?php  endforeach;     }  ?>
                
                
                            
         
            
            </table>
        
        </div>
            <!-- FIM DA EXIBIÇÃO DOS DADOS  -->

           





    </div>

</div>



