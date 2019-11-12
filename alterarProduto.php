<?php

require('ConsultasSql.php');
$ConsultasBanco = new ConsultasBanco;

$id_prod = $_GET['id'];
$recebe_produto = $_POST['Produto'];
$recebe_descricao = $_POST['Descricao'];
$recebe_categoria = $_POST['Categoria'];
$recebe_imagem = $_FILES['Foto']['tmp_name'];
$recebe_tamanho = $_FILES['Foto']['size'];
$recebe_tipo = $_FILES['Foto']['type'];
$recebe_nome = $_FILES['Foto']['name'];
$recebe_preco = $_POST['dinheiro'];
$recebe_estoque = $_POST['Estoque'];

if ( $recebe_imagem != "none" )
{
    $fp = fopen($recebe_imagem, "rb");
    $conteudo = fread($fp, $recebe_tamanho);
    $conteudo = addslashes($conteudo);
	fclose($fp);
	
try{
    $sql="UPDATE products SET PRO_Nome = '".$recebe_produto."',
	      PRO_Descricao = '".$recebe_descricao."',
	      PRO_Categoria_Id = '".$recebe_categoria."',
          PRO_Foto = '".$conteudo."',
		  PRO_Tamanho_Foto = '".$recebe_tamanho."',
		  PRO_Tipo_Foto = '".$recebe_tipo."',
		  PRO_Nome_Foto = '".$recebe_nome."',
	      PRO_Preco = '".$recebe_preco."',
		  PRO_Estoque = '".$recebe_estoque."'
		  WHERE PRO_Id = '".$id_prod."'";
   
	if ($ConsultasBanco->ConectarBanco()->query($sql) === TRUE) {
		echo 'Produto alterado com sucesso!<br>';
		
	  }
	  else {
	   echo 'Error: '. $ConsultasBanco->ConectarBanco()->error;
	  }
	}
	catch(PDOException $e) {
	
	
		echo $e->getMessage();
			
	}  
	
}
?>
<a href="menu_Prod.php">Voltar!</a>