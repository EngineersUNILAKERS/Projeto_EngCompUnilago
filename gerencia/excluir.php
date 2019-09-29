<?php 
include('../config.php');
$id = $_GET['id'];
$sql = mysql_query("delete from users where Id_Cli = $id");
if($sql == true){
echo "<script>location.href='gerenciar.php'</script>";
}
?>