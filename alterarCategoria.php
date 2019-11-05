<?php

require('ConsultasSql.php');
$ConsultasBanco = new ConsultasBanco;

$id_prod = $_GET['id'];
$recebe_produto = $_POST['Produto'];
$recebe_descricao = $_POST['Descricao'];
$recebe_foto = $_POST['Foto'];
$recebe_preco = $_POST['dinheiro'];


    $sql="UPDATE category SET CAT_Nome = '".$recebe_produto."',
	      CAT_Descricao = '".$recebe_descricao."',
	      PhotoQuant = '".$recebe_foto."',
	      MinimumStockLevel = '".$recebe_preco."'
		  WHERE CAT_Id = '".$id_prod."'";
   
	if ($ConsultasBanco->ConectarBanco()->query($sql) === TRUE) {
		echo 'Categoria alterado com sucesso!<br>';
		
	  }
	  else {
	   echo 'Error: '. $ConsultasBanco->ConectarBanco()->error;
	  }


?>
<a href="menuCategoria.php">Voltar!</a>