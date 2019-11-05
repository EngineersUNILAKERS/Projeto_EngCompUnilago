<?php
$id_prod = $_GET['id'];
/* $_POST['PRO_Id'];*/
require('ConsultasSql.php');
session_start();
$ConsultasBanco = new ConsultasBanco;
$ConsultasBanco->verificaAdm($_SESSION['grupo']);
$sql2="UPDATE category SET CAT_Ativo = '2' WHERE CAT_Id='".$id_prod."'";
if ($ConsultasBanco->ConectarBanco()->query($sql2) === TRUE) {
    echo 'Categoria desativada com sucesso';
  }
  else {
   echo 'Error: ', $ConsultasBanco->ConectarBanco()->error;
  }
?>
<a href="MostrarCategoria.php"><button>VOLTAR</button></a>