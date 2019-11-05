<?php

require('ConsultasSql.php');

$ConsultasBanco = new ConsultasBanco;

$recebe_codigo = $_POST['codigo'];
$recebe_Nome_Produto = $_POST['Nome_Produto'];
$recebe_descricao = $_POST['descricao'];
$recebe_categoria = $_POST['categoria'];
$recebe_dinheiro = $_POST['dinheiro'];
$recebe_Qtd_Estoque = $_POST['Qtd_Estoque'];
$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome = $_FILES['imagem']['name'];

if ( $imagem != "none" )
{
    $fp = fopen($imagem, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);



try {
	$sql="INSERT INTO products (PRO_Codigo, PRO_Nome, PRO_Descricao, PRO_Categoria_Id , PRO_Nome_Foto, PRO_Tamanho_Foto, PRO_Tipo_Foto, PRO_Foto, PRO_Preco, PRO_Estoque, PRO_Ativo ) 
	VALUES ('$recebe_codigo', '$recebe_Nome_Produto', '$recebe_descricao', '$recebe_categoria','$nome','$tamanho', '$tipo','$conteudo', '$recebe_dinheiro', '$recebe_Qtd_Estoque', 1)";
	
   
	if ($ConsultasBanco->ConectarBanco()->query($sql) === TRUE) {
		echo 'Produto criado com sucesso!<br>';
		
	  }
	  else {
	   echo 'Error: '. $ConsultasBanco->ConectarBanco()->error;
	  }
	}			
catch(PDOException $e) {
	
	
	echo $e->getMessage();
		
	}  

}

?><a href="menu_Prod.php">Voltar!</a>