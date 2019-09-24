<?php
  require('devtools/ConsultasSql.php');

  $ConsultasBanco = new ConsultasBanco;

    $pesquisar = $_POST['pesquisar'];
    $result_produtos = "SELECT * FROM products WHERE PRO_Nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_produtos = mysqli_query($conn, $result_produtos);
    
    while($rows_produtos = mysqli_fetch_array($resultado_produos)){
        echo "Nome do produto: ".$rows_produtos['PRO_Nome']."<br>";
    }
?>

