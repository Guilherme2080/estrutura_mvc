
<div class="pg_caixa">

<!-- ------------------------------INSERÇÃO DOS DADOS ---------------------------------------- -->
    <div class="main_caixa">

        <form method="POST"  action="<?php URL_BASE ?>caixa">

            <div class="data_caixa">
                <p>Data</p>
                <input type="text" name="data_caixa" value="<?php  echo date("d-m-Y") ?>">
            </div>
            
            <div class="desc_caixa">
                <p>descrição </p>
                <input type="text" name="descricao_caixa">
            </div>

            <div class="valor_caixa">
                <p>Valor</p>
                <input type="text" name="valor_caixa">
            </div>
            
            <div class="option_caixa">
                    <p>tipo</p>
                <select name="tipo" >

                    <option value="dinheiro">Dinheiro</option>
                    <option value="cartao">Cartao</option>
                    <option value="boleto">Boleto pra pagar</option>

                 </select>
            </div>

            <div class="bt_enviar_caixa">
                <p>Submeter</p>
                 <input type="submit">
            </div>
            


        </form>
    </div>

<!-- ------------------------------ FIM DA INSERÇÃO DOS DADOS ---------------------------------------- -->





   <!-- --------------------------------------------------EXIBIÇÃO DOS DADOS -----------------------------           -->
   <div class="exibir_soma">
        <?php  echo $soma_caixa[0][0]; ?>
   </div>
   
   <div class="tabela_caixa" align="center">
 
         <table id="lista"  border="0" cellspacing="0">
                        <thead>
                            <tr>

                                <th>data</th>
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
                                <td> <?php echo $result_caixa['data']?> </td>
                                <td> <?php echo $result_caixa['descricao']?> </td>
                                <td> <?php echo $result_caixa['valor']?> </td>
                                <td> <?php echo $result_caixa['tipo']?> </td>
                                <!-- <td><a href="<?php echo URL_BASE;?>caixa/excluir?excluir=<?php echo $result_caixa['id']?>">Excluir</a></td>
                                <a href="excluir.php" onclick="return confirm('Deseja excluir esse registro ?')">Excluir</a> -->
                               <td><a href="<?php echo URL_BASE;?>caixa/excluir?excluir=<?php echo $result_caixa['id']?>" onclick="return confirm('Deseja excluir o registro : <?php echo $result_caixa['descricao'] ?>')">Excluir</a></td> 
                                                            
                            </tr>
                       </tbody>
                <?php  endforeach;     }  ?>
                
                
                            
         
            
            </table>
        
    </div>
    <!-- -------------------------------------------------- FIM DA EXIBIÇÃO DOS DADOS -----------------------------    


</div>



