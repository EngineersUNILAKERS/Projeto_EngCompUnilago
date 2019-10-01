<?php
$id_prod = $_GET['id'];
/* $_POST['PRO_Id'];*/
require('ConsultasSql.php');
session_start();
$ConsultasBanco = new ConsultasBanco;
$ConsultasBanco->verificaAdm($_SESSION['grupo']);
$sql = "SELECT * FROM products WHERE PRO_Id='". $id_prod ."'";

$result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
while($produto = mysqli_fetch_assoc($result))
	{	
        $Ativar = $produto['PRO_Ativo'];
    }
    

    $sql="UPDATE products SET PRO_Ativo = '".$recebe_produto."',




?>