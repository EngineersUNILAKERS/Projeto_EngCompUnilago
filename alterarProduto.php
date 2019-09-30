<?php

$recebe_produto = $_POST['Produto'];
$recebe_linha = $_POST['Linha'];
$recebe_descricao = $_POST['Descricao'];
$recebe_foto1 = $_FILES['Foto1'];
$recebe_foto2 = $_FILES['Foto2'];


$destino = "upload/";


if (!empty($recebe_foto1['name'])) {

	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1);
	$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

	$upload_foto1=1;

}

else {
	
	$img_nome1=$exibe['Foto1'];
	$upload_foto1=0;
	
}



?>