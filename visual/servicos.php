<br>



<div class="topo_pgs">
    <h1>Serviços</h1>


    <div class="bt_voltar hvr-bounce-out">
        <a href="<?php echo URL_BASE ?>arealogada">Voltar</a> 
    </div>
</div>



<br>

<div class="lista_financa">
    <!-- TEM QUE FICAR ANTES DO FOREACH PRA NÃO FICAR REPETINDO  -->
    <table width="100%" border="0" cellspacing="0">
        <thead>
            <tr >
                <th>ID</th>
                <th>Nome do cliente</th>   
                <th>Nome do serviço</th>   
                <th>telefone</th>
                <th>Placa</th>  
                <th>cpf</th>                    
                <th>endereco</th>                    
                <th>observacao</th> 
                <th>Valor do Serviço</th> 
                <th>Data</th> 
                 
             

            </tr>


            <!-- quando existir um termo buscado em pesquisa  -->
            <?php
            if ($lista_contas != array()) {
                foreach ($listar_servicos as $ls_servicos):
                    ?>


                <tbody>
                    <tr  align=center>
                        <td> <?php echo $ls_servicos['id']; ?> </td>
                        <td> <?php echo $ls_servicos['nome']; ?> </td>
                        <td> <?php echo $ls_servicos['nome_servico']; ?> </td>
                        <td> <?php echo $ls_servicos['telefone']; ?> </td>
                        <td> <?php echo $ls_servicos['placa']; ?> </td>
                       
                        <td> <?php echo $ls_servicos['cpf']; ?> </td>
                        <td> <?php echo $ls_servicos['endereco']; ?> </td>
                        <td> <?php echo $ls_servicos['observacao']; ?> </td>
                        <td> <?php echo $ls_servicos['valor_servico']; ?> </td>
                       
                        <td> <?php echo date("d/m/Y H:i:s", strtotime($ls_servicos['data']));  ?>
                 
                    </tr>
                </tbody>


    <?php endforeach;
} ?>

    </table>

    <?php
     if(isset($pesquisa)){
         
         foreach ($pesquisa as $ls_pesquisa):
    ?>


                <tbody>
                    <tr  align=center>
                        <td> <?php echo $ls_pesquisa['id']; ?> </td>
                        <td> <?php echo $ls_pesquisa['nome']; ?> </td>
                        <td> <?php echo $ls_pesquisa['nome_servico']; ?> </td>
                        <td> <?php echo $ls_pesquisa['telefone']; ?> </td>
                        <td> <?php echo $ls_pesquisa['placa']; ?> </td>
                       
                        <td> <?php echo $ls_pesquisa['cpf']; ?> </td>
                        <td> <?php echo $ls_pesquisa['endereco']; ?> </td>
                        <td> <?php echo $ls_pesquisa['observacao']; ?> </td>
                        <td> <?php echo $ls_pesquisa['valor_servico']; ?> </td>
                       
                        <td> <?php echo date("d/m/Y H:i:s", strtotime($ls_pesquisa['data']));  ?>
                 
                    </tr>
                </tbody>


     <?php endforeach; } ?>

    </table>
    
    
    
</div>






