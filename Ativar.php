<?php
$id_prod = $_GET['id'];
/* $_POST['PRO_Id'];*/
require('ConsultasSql.php');
session_start();
$ConsultasBanco = new ConsultasBanco;
$ConsultasBanco->verificaAdm($_SESSION['grupo']);
$sql2="UPDATE products SET PRO_Ativo = '1' WHERE PRO_Id='".$id_prod."'";
if ($ConsultasBanco->ConectarBanco()->query($sql2) === TRUE) {
    echo 'Produto ativo com sucesso';
  }
  else {
   echo 'Error: ', $ConsultasBanco->ConectarBanco()->error;
  }
?>
<a href="Mostrat_Prod.php"><button>VOLTAR</button></a>