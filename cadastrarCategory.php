<?php

require('ConsultasSql.php');

$ConsultasBanco = new ConsultasBanco;

$recebe_codigo = $_POST['codigo'];
$recebe_Nome_Categoria = $_POST['Nome_Categoria'];
$recebe_descricao = $_POST['descricao'];
$recebe_Qtd_Fotos = $_POST['Qtd_Fotos'];
$recebe_Estoque_Min = $_POST['Estoque_Min'];

try {
	$sql="INSERT INTO category (CAT_Id, CAT_Nome, CAT_Descricao, PhotoQuant , MinimumStockLevel, CAT_Ativo ) 
	VALUES ('$recebe_codigo', '$recebe_Nome_Categoria', '$recebe_descricao', '$recebe_Qtd_Fotos', '$recebe_Estoque_Min', 1)";
	
   
	if ($ConsultasBanco->ConectarBanco()->query($sql) === TRUE) {
		echo 'Categoria criado com sucesso!<br>';
	  }
	  else {
	   echo 'Error: '. $ConsultasBanco->ConectarBanco()->error;
	  }
		  
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?><a href="menuCategoria.php">Voltar!</a>