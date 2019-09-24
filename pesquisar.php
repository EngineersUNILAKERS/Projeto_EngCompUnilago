<?php
  require('ConsultasSql.php');
  $ConsultasBanco = new ConsultasBanco;
    $pesquisar = $_POST['pesquisar'];
    $dadopesquisado = $ConsultasBanco->PesquisaProd($pesquisar);
    
    foreach($dadopesquisado as $lista)
    {
        echo "Nome do produto: ".$lista['PRO_Nome']."<br>";
        echo "Descricao: ".$lista['PRO_Descricao']."<br>";
        echo "Preço R$: ".$lista['PRO_Preco']."<br>";
    }
?>

