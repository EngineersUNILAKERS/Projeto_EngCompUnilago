<?php
 
require('ConsultasSql.php');

$ConsultasBanco = new ConsultasBanco();
$ConsultasBanco->Conectarbanco();

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT email FROM users WHERE email = '$email'";
$buscar = mysqli_query($ConsultasBanco,$sql);

$total = mysqli_num_rows($buscar);

if($total > 0){
    echo 'conferir senha';
} else {
    header('Location:index.html');
    
}

?>
<script>
    alert("Você não possui cadastro!!");
</script>
