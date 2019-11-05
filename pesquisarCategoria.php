<?php
  require('ConsultasSql.php');
  $ConsultasBanco = new ConsultasBanco;
    $pesquisar = $_POST['pesquisar'];
    $dadopesquisado = $ConsultasBanco->PesquisaProd($pesquisar);
    
    if($dadopesquisado!=NULL || $dadopesquisado!="")
    {
    foreach($dadopesquisado as $lista)
    {
      ?>		 
      <div><h3><?php echo 'Nome do Produto: ',$lista ['PRO_Nome']?><br></h3></div>
      <div><h4><?php echo 'Descrição: ',$lista ['PRO_Descricao']?><br></h4></div>
      <div><h4><?php echo 'R$: ', $lista ['PRO_Preco']?><br></h4></div>
      <div><h4><?php echo 'Quantidade em Estoque: ',$lista ['PRO_Estoque']?><br></h4></div>
      <!--<div><h4><?/*php echo 'Foto: ',$lista ['PRO_Foto']*/?><br></h4></div>-->
      <?php
    }
  }
  else{
    echo "Não foi encontrado o produto pesquisado!";
  }
  ?>
  <a href="menu_Prod.php"><button>Voltar</button></a>