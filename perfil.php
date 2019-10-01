<?php
	$id_prod = $_GET['id'];
	/* $_POST['PRO_Id'];*/
 	require('ConsultasSql.php');
	session_start();
	$ConsultasBanco = new ConsultasBanco;
	$ConsultasBanco->verificaAdm($_SESSION['grupo']);
	$sql = "SELECT * FROM users WHERE Email='". $id_prod ."'";

	$result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
	
	while($usuario = mysqli_fetch_assoc($result))
	{	
		$exibe_nome = $usuario['Nome'];
		$exibe_email = $usuario['Email'];
		$pega_login = $usuario['Login'];
	}
    ?>
            <div><h3><?php echo 'Nome do Usuario: ',$lista ['Nome']?><br></h3></div>
			<div><h4><?php echo 'E-mail: ',$lista ['Email']?><br></h4></div>
			<div><h4><?php echo 'Login: ', $lista ['Login']?><br></h4></div>

	