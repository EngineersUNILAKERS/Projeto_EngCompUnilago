<?php 
include('../config.php');
require('../ConsultasSql.php');
session_start();
$ConsultasBanco = new ConsultasBanco;
$ConsultasBanco->verificaAdm($_SESSION['grupo']);
$id = $_GET['id'];
$sql=("DELETE FROM USERS where Id_Cli = $id");
 $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);

if($sql == true){
echo "<script>location.href='gerenciar.php'</script>";
}
?>