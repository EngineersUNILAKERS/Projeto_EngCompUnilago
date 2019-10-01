<?php

require('ConsultasSql.php');
$ConsultasBanco = new ConsultasBanco;

$id_prod = $_GET['id'];
$recebe_produto = $_POST['Produto'];
$recebe_descricao = $_POST['Descricao'];
$recebe_categoria = $_POST['Categoria'];
/*$recebe_foto1 = $_FILES['Foto'];*/
$recebe_preco = $_POST['dinheiro'];
$recebe_estoque = $_POST['Estoque'];

$destino = "upload/";


/*if (!empty($recebe_foto1['name'])) {

	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1);
	$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

	$upload_foto1=1;

}
PRO_Foto = '$img_nome1',
else {
	
	$img_nome1=$recebe_foto1;
	$upload_foto1=0;
	
}*/

    $sql="UPDATE products SET PRO_Nome = '".$recebe_produto."',
	      PRO_Descricao = '".$recebe_descricao."',
	      PRO_Categoria_Id = '".$recebe_categoria."',
          PRO_Preco = '".$recebe_preco."',
	      PRO_Estoque = '".$recebe_estoque."'
		  WHERE PRO_Id = '".$id_prod."'";
   
	if ($ConsultasBanco->ConectarBanco()->query($sql) === TRUE) {
		echo 'Produto alterado com sucesso!<br>';
	  }
	  else {
	   echo 'Error: '. $ConsultasBanco->ConectarBanco()->error;
	  }


?>