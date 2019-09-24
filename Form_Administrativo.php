<?php

require('ConsultasSql.php');

$ConsultasBanco = new ConsultasBanco;

$recebe_codigo = $_POST['codigo'];
$recebe_Nome_Produto = $_POST['Nome_Produto'];
$recebe_descricao = $_POST['descricao'];
$recebe_categoria = $_POST['categoria'];
$recebe_dinheiro = $_POST['dinheiro'];
$recebe_Qtd_Estoque = $_POST['Qtd_Estoque'];
$recebe_foto = $_FILES['foto'];
/*$destino = "upload/";*/
preg_match("/\.(jpg|jpeg|png){1}$/i",$recebe_foto['name'],$extencao1);
$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

try {
	$sql="INSERT INTO products (PRO_Codigo, PRO_Nome, PRO_Descricao, PRO_Categoria_Id , PRO_Foto, PRO_Preco, PRO_Estoque, PRO_Ativo ) 
	VALUES ('$recebe_codigo', '$recebe_Nome_Produto', '$recebe_descricao', '$recebe_categoria', '$img_nome1', '$recebe_dinheiro', '$recebe_Qtd_Estoque', 1)";
	
   
	if ($ConsultasBanco->ConectarBanco()->query($sql) === TRUE) {
		echo 'Produto criado com sucesso!<br>';
	  }
	  else {
	   echo 'Error: '. $ConsultasBanco->ConectarBanco()->error;
	  }
		  
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>