<?php

/*include 'conexao.php';*/

$recebe_codigo = $_POST['codigo'];
$recebe_Nome_Produto = $_POST['Nome_Produto'];
$recebe_descricao = $_POST['descricao'];
$recebe_categoria = $_POST['categoria'];
$recebe_dinheiro = $_POST['dinheiro'];
$recebe_Qtd_Estoque = $_POST['Qtd_Estoque'];
$recebe_foto = $_FILES['foto'];
/*$destino = "upload/";*/
preg_match("/\.(jpg|jpeg|png){1}$/i",$recebe_foto1['name'],$extencao1);
$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

try {
	
	$inserir=$conexao->query("INSERT INTO produtos (codigo, Nome_Produto, descricao, categoria, dinheiro, Qtd_Estoque, preco, foto) VALUES ('$recebe_produto', '$recebe_marca', '$recebe_descricao', '$recebe_departamento', '$recebe_secao', '$recebe_quantidade', '$recebe_preco', '$img_nome1')");
	
	
	
	
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>