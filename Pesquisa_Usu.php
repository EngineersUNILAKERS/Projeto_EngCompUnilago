<?php
  require('ConsultasSql.php');
  $ConsultasBanco = new ConsultasBanco;
    $pesquisar = $_POST['pesquisar'];
    $dadopesquisado = $ConsultasBanco->PesquisaProd($pesquisar);
    
    foreach($dadopesquisado as $lista)
    {
        echo "Nome do Usuario: ".$lista['Nome']."<br>";
        echo "Usuário: ".$lista['Login']."<br>";
        echo "Email: ".$lista['Email']."<br>";
    }
?>

