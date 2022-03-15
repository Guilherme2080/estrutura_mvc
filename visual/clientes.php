
<?php  

$url = ($_SERVER['REQUEST_URI']); 
$url_final = explode("/", $url);
    
?>
<?php if($url_final[1] == "clientes"){ ?>

<style>
    .c_sele{        
        float: left;
        line-height: 50px;
        padding-left: 10px;
        padding-right: 10px;
        background-color: #098aaa;
    }
</style>

<?php }?>

<div class="topo_pgs">
        
<div class="bt_voltar hvr-bounce-out">
    <a href="<?php echo URL_BASE ?>arealogada">Voltar</a> 
</div>
  
</div>

<div class="pesquisa_prod remover" >
    <form method="POST" action="<?php echo URL_BASE ?>clientes">
        <input class="ip_pe" name="pesquisa" placeholder="Pesquise por Nome do Cliente">
        <input class="bt_pe" type="submit" value=""><br>
    </form> 
    <br>
</div>  


<div class="clientes" >
    
 
     <label class="remover estilo_inserir" for="toggle-1">
        <p>INSERIR</p>
    </label>
<input type="checkbox" id="toggle-1">
<!--<div id="mostra2">
       <input id="filtro-nome" placeholder="buscar por nome">
       <input id="filtro-referencia" placeholder="buscar por placa">  
</div>       
-->
   
    
    
 
    <?php  if (isset($excluir)): //se houver id siginifica que existira alteração  ?>
    
        <form  class="mover_form" method="POST" action="<?php URL_BASE ?>excluir?excluir=<?php echo $excluir ?>">

            <input  required=""   name="nome" type="text" value="<?php echo $selecionar_cliente['nome'] ?>" placeholder="NOME DO CLIENTE">
            <input  type="text"  name="telefone" value="<?php echo $selecionar_cliente['telefone'] ?>" placeholder="TELEFONE"><br>
            <input  type="text"  name="cpf" value="<?php echo $selecionar_cliente['cpf'] ?>" placeholder="CPF"><br>
            <input  type="text"  name="endereco"  value="<?php echo $selecionar_cliente['endereco'] ?>" placeholder="ENDEREÇO"><br>
            <input  type="text"  name="placa" value="<?php echo $selecionar_cliente['placa'] ?>" placeholder="PLACA"><br>
            <input  type="text"   name="observacao" value="<?php echo $selecionar_cliente['observacao'] ?>" placeholder="MAIS DETALHES"><br>
            <input class="bt_cli"  type="submit" value="Excluir"><br>


        </form>

    <?php endif; ?>
    
   
    
    <?php  if (isset($id)): //se houver id siginifica que existira alteração  ?>
    
        <form class="mover_form" method="POST" action="<?php URL_BASE; ?>editar?id=<?php echo $id ?>">

            <input  required="" name="nome" type="text" value="<?php echo $selecionar_cliente['nome'] ?>"  placeholder="NOME DO CLIENTE">
            <input  type="text" name="telefone" value="<?php echo $selecionar_cliente['telefone'] ?>" placeholder="TELEFONE"><br>
            <input  type="text" name="cpf" value="<?php echo $selecionar_cliente['cpf'] ?>" placeholder="CPF"><br>
            <input  type="text" name="endereco"  value="<?php echo $selecionar_cliente['endereco'] ?>" placeholder="ENDEREÇO"><br>
            <input  type="text"  name="placa" value="<?php echo $selecionar_cliente['placa'] ?>" placeholder="PLACA"><br>
            <input  type="text"  name="observacao" value="<?php echo $selecionar_cliente['observacao'] ?>" placeholder="MAIS DETALHES"><br>
            <input class="bt_cli" type="submit" value="Atualizar"><br>


        </form>

    <?php endif; ?>
    
    
    
    
   
    
    <?php if (!isset($id) && !isset($excluir)): ?>



        <form class="mover_form" id="mostra1" method="POST" action="<?php URL_BASE ?>clientes">

            <input  required="" name="nome" type="text" placeholder="NOME DO CLIENTE">
            <input  type="text" name="telefone" placeholder="TELEFONE"><br>
            <input  type="text" name="cpf" placeholder="CPF"><br>
            <input  type="text" name="endereco"  placeholder="ENDEREÇO"><br>
            <input  type="text"  name="placa" placeholder="PLACA"><br>
            <input  type="text"  name="observacao" placeholder="MAIS DETALHES"><br>
            <input class="bt_cli"  type="submit" value="Cadastrar"><br>


        </form>
<br>
    <?php endif; ?>
    
    
    
    
    
    <br>
    
    <div class="qtde_clientes opcoes_lst_prod">
        <p>Clientes Cadastrados: <?php if(isset($quantidade_clientes[0][0])){ echo $quantidade_clientes[0][0];} ?></p> <br>   
    </div>
    
        <br>
        <div class="cor_lista_clientes">
        <div class="lista_clientes">
        <!-- TEM QUE FICAR ANTES DO FOREACH PRA NÃO FICAR REPETINDO  -->
         <table id="lista"  border="0" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>telefone</th>
                        <th>cpf</th>
                        <th>endereco</th>
                        <th>placa</th>
                        <th>observacao</th>
                        <th>Edição</th>
                        <th>Exclusão</th>
                        <th>Ver Cadastro</th>
                    </tr>
                
        
        <!-- ENQUANTO EXISTIR RESULTADO NO ARRAY COLOCA NA VARIAVEL CRIADA $lst_cliente  -->
           <!-- quando não houver pesquisa  -->
           <?php 
           if(!isset($pesquisa)){
               foreach($lista_cliente as $lst_cliente):?>  
            
       
                <tbody>
                    <tr  align=center>
                        <td> <?php echo $lst_cliente['nome']?> </td>
                        <td> <?php echo $lst_cliente['telefone']?> </td>
                        <td> <?php echo $lst_cliente['cpf']?> </td>
                        <td> <?php echo $lst_cliente['endereco']?> </td>
                        <td> <?php echo $lst_cliente['placa']?> </td>
                        <td> <?php echo $lst_cliente['observacao']?> </td>
                        <td class="cliente_editar"><a href="<?php echo URL_BASE;?>clientes/editar?id=<?php echo $lst_cliente['id']?>">Editar</a></td>
          <td class="cliente_excluir"><a href="<?php echo URL_BASE;?>clientes/excluir?excluir=<?php echo $lst_cliente['id']?>">Excluir</a></td>
          <td class="cliente_ver"><a href="<?php echo URL_BASE;?>clientes/ver?ver=<?php echo $lst_cliente['id']?>" target="_blank">Ver</a></td>
          
                        
                    </tr>
               </tbody>
           <?php  endforeach;     } else{     ?>
           
          
              <!-- quando existir um termo buscado em pesquisa  -->
            <?php foreach($pesquisa as $pesquis):?>
               
          
                <tbody>
                    <tr  align=center>
                        <td> <?php echo $pesquis['nome']?> </td>
                        <td> <?php echo $pesquis['telefone']?> </td>
                        <td> <?php echo $pesquis['cpf']?> </td>
                        <td> <?php echo $pesquis['endereco']?> </td>
                        <td> <?php echo $pesquis['placa']?> </td>
                        <td> <?php echo $pesquis['observacao']?> </td>
      
                        
                        
                                        <td class="cliente_editar"><a href="<?php echo URL_BASE;?>clientes/editar?id=<?php echo $pesquis['id']?>">Editar</a></td>
          <td class="cliente_excluir"><a href="<?php echo URL_BASE;?>clientes/excluir?excluir=<?php echo $pesquis['id']?>">Excluir</a></td>
          <td class="cliente_ver"><a href="<?php echo URL_BASE;?>clientes/ver?ver=<?php echo $pesquis['id']?>" target="_blank">Ver</a></td>
           <!--             
                        <td><a href="<?php echo URL_BASE;?>clientes/editar?id=<?php echo $pesquis['id']?>"><img class="hvr-wobble-skew" src="<?php echo URL_BASE; ?>midias/imagens/editar.png" ></a></td>
          <td><a href="<?php echo URL_BASE;?>clientes/excluir?excluir=<?php echo $pesquis['id']?>"><img class="hvr-wobble-skew" src="<?php echo URL_BASE; ?>midias/imagens/excluir.png" ></a></td>
          <td><a href="<?php echo URL_BASE;?>clientes/ver?ver=<?php echo $pesquis['id']?>"><img class="hvr-wobble-skew" src="<?php echo URL_BASE; ?>midias/imagens/ver.png" ></a></td>
          -->
                        
                    </tr>
               </tbody>
               
           
           <?php endforeach; }?>
            
            </table>
        
    </div>
    </div>
        
 <script type="text/javascript">
    
var filtro = document.getElementById('filtro-nome');
var tabela = document.getElementById('lista');
filtro.onkeyup = function() {
    var nomeFiltro = filtro.value;
    for (var i = 1; i < tabela.rows.length; i++) {
        var conteudoCelula = tabela.rows[i].cells[0].innerText;
        var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
        tabela.rows[i].style.display = corresponde ? '' : 'none';
    }
};

var filtro_ref = document.getElementById('filtro-referencia');
var tabela_ref = document.getElementById('lista');
filtro_ref.onkeyup = function() {
    var nomeFiltroReferencia = filtro_ref.value;
    for (var i = 1; i < tabela_ref.rows.length; i++) {
        var conteudoCelula = tabela_ref.rows[i].cells[4].innerText;
        var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltroReferencia) >= 0;
        tabela_ref.rows[i].style.display = corresponde ? '' : 'none';
    }
};



</script>
        
    
</div>
