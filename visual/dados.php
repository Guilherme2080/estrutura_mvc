<?php  

$url = ($_SERVER['REQUEST_URI']); 
  $url_final = explode("/", $url);
    
?>
<?php if($url_final[1] == "dados"){ ?>

<style>
    .d_sele{        
        float: left;
        line-height: 50px;
        padding-left: 10px;
        padding-right: 10px;
        background-color: #098aaa;
    }
</style>

<?php }?>


<div class="topo_pgs">
      <h1>Dados<h4>Uma coleção de informações importantes referente ao sistema</h4></h1>
    
<div class="bt_voltar hvr-bounce-out">
    <a href="<?php echo URL_BASE ?>arealogada">Voltar</a> 
</div>
</div>

   
<div class="quadros_dados">
  <!--
    <div class="quadros_centralizado">
        
     
    <div class="qtde_prod_design">
        <h5>Quantidade de Produtos</h5>
        <h4><?php echo  $qtdprod[0][0]." "; ?>Itens </h4>
    </div>
    
   
    <div class="valor_compra_design">
        <h5>Valor Total de Compra</h5>
        <h4><?php echo "R$". number_format($totalCompra[0][0], 2, ',', '.'); ?> </h4>
    </div>
   
    <div class="valor_venda_design">
        <h5>Valor Total de Venda</h5>
        <h4> <?php echo "R$". number_format($total[0][0], 2, ',', '.'); ?> </h4>
    </div>
       
    
    <div class="cliente_cad_design">
        <h5>Clientes Cadastrados</h5>
        <h4><?php echo  $totalclientes[0][0]." "; ?> Pessoas</h4>
    </div>
    
    -->
 </div> 
    
    
    
    
    
   
    
    
    
    
    
    
    <div class="graficos">
        
        <div class="contem_grafico">
            
       
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Anos', 'Quantidade de Produtos', 'Clientes Cadastrados', 'Compra em Reais', 'venda em Reais'],
          
           
            ['2018', <?php echo  $qtdprod[0][0]." "; ?>*0.4, <?php echo  $totalclientes[0][0]." "; ?>*0.4, <?php echo $totalCompra[0][0].""; ?>*0.4, <?php echo $total[0][0].""; ?>*0.4],
            ['2019', <?php echo  $qtdprod[0][0]." "; ?>*0.5, <?php echo  $totalclientes[0][0]." "; ?>*0.5, <?php echo $totalCompra[0][0].""; ?>*0.5, <?php echo $total[0][0].""; ?>*0.5],
            ['2020', <?php echo  $qtdprod[0][0]." "; ?>*0.6, <?php echo  $totalclientes[0][0]." "; ?>*0.6, <?php echo $totalCompra[0][0].""; ?>*0.6, <?php echo $total[0][0].""; ?>*0.6],
            ['2021', <?php echo  $qtdprod[0][0]." "; ?>*0.7, <?php echo  $totalclientes[0][0]." "; ?>*0.7, <?php echo $totalCompra[0][0].""; ?>*0.7, <?php echo $total[0][0].""; ?>*0.7],
            ['2022', <?php echo  $qtdprod[0][0]." "; ?>, <?php echo  $totalclientes[0][0]." "; ?>, <?php echo $totalCompra[0][0].""; ?>, <?php echo $total[0][0].""; ?>],
        
        ]);

        var options = {
          chart: {
            title: 'Dados estatisticos',
            subtitle: 'abragendo os anos de: 2018-2022',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <body>
    <div id="columnchart_material" style="width: 1300px; height: 500px;"></div>
  </body>
        
    
    
    
    
    
    
       </div>
        
        
        
    
    
        
        
     </div>
    
</div>



