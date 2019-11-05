<?php
  require('ConsultasSql.php');
  $ConsultasBanco = new ConsultasBanco;
    $pesquisar = $_POST['pesquisar'];
    $dadopesquisado = $ConsultasBanco->PesquisaCat($pesquisar);
    
    if($dadopesquisado!=NULL || $dadopesquisado!="")
    {
    foreach($dadopesquisado as $lista)
    {
      ?>		 
      <div><h3><?php echo 'Nome da Categoria: ',$lista ['CAT_Nome']?><br></h3></div>
      <div><h4><?php echo 'Descrição: ',$lista ['CAT_Descricao']?><br></h4></div>
      <div><h4><?php echo 'Quantidade em Estoque: ',$lista ['MinimumStockLevel']?><br></h4></div>
      <!--<div><h4><?/*php echo 'Foto: ',$lista ['PRO_Foto']*/?><br></h4></div>-->
      <br><br>
      <?php

    }
  }
  else{
    echo "Não foi encontrado a categoria pesquisado!";
  }
  ?>
  <a href="menuCategoria.php"><button>Voltar</button></a>