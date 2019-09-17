<?php
$msg = 0;
@$msg = $_REQUEST['msg'];
?> 


<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Unilakers</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
<style>

	.dropdown-menu
	{
		background-color: #2B81E7;	
	}
	

	
</style>	
	
</head>
	
	

<body>

	
	 <?php if($msg == 'enviado'): ?>
          
          <center><h1> Mensagem enviada, agradecemos seu contato!</h1>
            <br>
            <br>
            <a href="contato.php">
               <button type="button" class="btn btn-primary">Voltar</button>
            </a>
            </a>
	      </center> 
	        <br>
            <br>
	        <br>
	
	
	 <?php else: ?>
 
<div class="container-fluid">
<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    
     <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                    <h1>Envio de email</h1>

                    <p class="lead">Escolha qual usuário você deseja enviar mensagem</p>

                    
<form id="contact-form" method="POST" action="enviar.php" id="contato" enctype="multipart/form-data">

    <div class="messages"></div>

    <div class="controls">
          
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Seu email *" required="required" data-error="Insira um email valido">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="msg">Mensagem *</label>
                    <textarea id="msg" name="msg" class="form-control" placeholder="Mensagem *" rows="4" required="required" data-error="Por gentileza, nos deixe sua mensagem"></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary" value="Enviar Mensagem">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> Informações obrigatórias. 
                   </p>
            </div>
        </div>
    </div>

</form>
					</form> 

                </div>

            </div>

</section>
<!--Section: Contact v.2-->
</div>	
	
	
</div>
	
       

<?php endif; ?> 
     
</body>
</html>