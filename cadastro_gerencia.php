<?php 

require('ConsultasSql.php');
$ConsultasBanco = new ConsultasBanco();
$ConsultasBanco->Conectarbanco();

$Usuario=$_POST['usuario'];
$Email=$_POST['email'];
$Senha=MD5($_POST['senha']);



/*$result = ("SELECT * FROM users WHERE Nome = '$Usuario' AND Senha = '$Senha'");

if(($result) > 0 )
{
    echo 'Usuário já existe';

}*/
/*else{*/
    $sql = "INSERT INTO users(Nome, Senha, Email) VALUES ('$Usuario', '$Senha', '$Email')";
    
	if ($ConsultasBanco->ConectarBanco()->query($sql) === TRUE) {
		echo 'Usuario criado com sucesso!<br>';
	
	  }
	  else {
	   echo 'Error: '. $ConsultasBanco->ConectarBanco()->error;
	  }
/*}*/

?>
</table>

<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn">
								<span>
									<a href="cadastro_gerencia.html">Cadastrar outro Usuario</a></a></li>
													
								</span>
							</button>
						</div>
					</div>
<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn">
								<span>
									
									<a href="gerencia/gerenciar.php">Voltar</a></a></li>						
								</span>
							</button>
						</div>
					</div>


</body>
</html>