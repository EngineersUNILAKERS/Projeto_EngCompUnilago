<?php

require('ConsultasSql.php');

$ConsultasBanco = new ConsultasBanco;
  
$sql="SELECT Nome FROM USERS";
$result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);



while($nome = mysqli_fetch_assoc($result))
{
 //echo $exibe['Nome']."<br>";

 $listaNomes[] = $nome;
}

print_r($listaNomes);
die();


























