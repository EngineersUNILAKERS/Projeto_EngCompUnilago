<?php
 
require('ConsultasSql.php');

$ConsultasBanco = new ConsultasBanco();
$ConsultasBanco->Conectarbanco();

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT email FROM users = '$email'";
$buscar = mysqli_query($ConsultasBanco,$sql);

$total = mysqli_num_rows($buscar);

?>