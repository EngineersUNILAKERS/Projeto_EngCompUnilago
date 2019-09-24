<?php
require('../config.php');

$NomeDoServer=$GLOBALS['NomeDoServer'];
$UserDoServer=$GLOBALS['UserDoServer'];
$senha = $GLOBALS['senha'];
$nomeDoBanco =$GLOBALS['nomeDoBanco'];

// Conectando com o MySql Server(conexão sem o nome do banco de dados)
$conn = new mysqli($NomeDoServer, $UserDoServer, $senha);

// Checando conexão
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}
//Criando o banco
$banco = "CREATE DATABASE `".$nomeDoBanco."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";

// Retornando a mensagem de sucesso ou erro ao criar o banco
if ($conn->query($banco) === TRUE) {
  echo 'Banco '.$nomeDoBanco.' criado com sucesso!<br>';
}
else {
 echo 'Error: '. $conn->error;
}

$conn->close();
// Conectando com o MySql Server para criar as tabelas no banco criado
$conn = new mysqli($NomeDoServer,$UserDoServer,$senha,$nomeDoBanco);

// Checando conexão
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}
//Criando as tabelas de usuários
$usuarios = "CREATE TABLE USERS(
	Id_Cli		INT NOT NULL,
	Login 		VARCHAR (50) PRIMARY KEY NOT NULL, 
	Nome 		VARCHAR (50) NOT NULL,
	Email		VARCHAR (50)NOT NULL,
	Senha		VARCHAR	(100),
	Grupo_Id	INT NOT NULL
)";
// Retornando a mensagem de sucesso ou erro ao criar a tabela de usuários
if ($conn->query($usuarios) === TRUE) {
    echo 'Tabela de usuários criada com sucesso!<br>';
  }
  else {
   echo 'Error: '. $conn->error;
  }

  


//Criando as tabelas de categorias
$categorias = "CREATE TABLE CATEGORY (
	CAT_Id			INT NOT NULL,
	CAT_Codigo 		INT PRIMARY KEY NOT NULL,
	CAT_Nome		VARCHAR (50) NOT NULL,
	CAT_Descricao		VARCHAR (300) NOT NULL,
	PhotoQuant       	INT NOT NULL,
	MinimumStockLevel	VARCHAR (500) NOT NULL,
	CAT_Ativo		VARCHAR (5) NOT NULL  
)";
// Retornando a mensagem de sucesso ou erro ao criar tabela de categorias
if ($conn->query($categorias) === TRUE) {
    echo 'Tabela de categorias criada com sucesso!<br>';
  }
  else {
   echo 'Error: '. $conn->error;
  }




//Criando as tabelas de produtos
$produtos = "CREATE TABLE PRODUCTS (
	PRO_Id			INT PRIMARY KEY NOT NULL,
	PRO_Codigo 		INT NOT NULL,
	PRO_Nome		VARCHAR (50) NOT NULL,
	PRO_Descricao		VARCHAR (300) NOT NULL,
	PRO_Categoria_Id	INT NOT NULL,
	PRO_Foto		VARCHAR (500) NOT NULL,
	PRO_Preco		FLOAT (5,2) NOT NULL,
	PRO_Estoque		FLOAT (5,4) NOT NULL,
	PRO_Ativo		VARCHAR (5) NOT NULL,
  FOREIGN KEY (PRO_Categoria_Id) REFERENCES CATEGORY(CAT_Codigo)
)";
// Retornando a mensagem de sucesso ou erro ao criar a tabela de produtos
if ($conn->query($produtos) === TRUE) {
    echo 'Tabela de produtos criada com sucesso!<br>';
  }
  else {
   echo 'Error: '. $conn->error;
  }




//Populando a tabela de usuarios com users e adm
$senhaPadrao = md5("teste");
$insertUsers = "INSERT INTO  USERS(Id_Cli, Login, Nome, Email, Senha, Grupo_Id)
VALUES(01,'adm','administrador','ENGCOMPLAKERS@GMAIL.COM','$senhaPadrao',2), 


(07,'Geraldo','Geraldo Zafalon','Geraldo@GMAIL.COM','$senhaPadrao',1),
(08,'Marquinho','Marquinho Pokemon','MarquinhoPokemon@GMAIL.COM','$senhaPadrao',1),
(09,'Casao','Casagrande','Casagrande@GMAIL.COM','$senhaPadrao',1),
(10,'Enade','Enade Meninao','EnadeMeninao@GMAIL.COM','$senhaPadrao',1),
(11,'usuario','USUARIO TESTE','ENG.COMPUTACAOUNILAGO@GMAIL.COM','$senhaPadrao',1)
";
// Retornando a mensagem de sucesso ou erro ao popular a tabela de usuários
if ($conn->query($insertUsers) === TRUE) {
    echo 'Tabela de usuários populada com sucesso!<br>';
  }
  else {
   echo 'Error: '. $conn->error;
  }

//Populando a tabela de usuarios com users e adm
$insertUsers = "INSERT INTO  category(CAT_Id, CAT_Codigo, CAT_Nome, CAT_Descricao, PhotoQuant, MinimumStockLevel, CAT_Ativo)
VALUES(01,'500','CURSOS','Cursos EAD',1,0,'1'), 
(02,'501','SMARTFONES','Smartfones e periféricos',7,1,'0'),
(03,'502','ELETRODOMESTICOS','Eletrodomésticos em geral para casa',7,1,'1'),
(04,'503','SOFTWARES','Programas e apps para PCs',5,0,'1')";
// Retornando a mensagem de sucesso ou erro ao popular a tabela de usuários
if ($conn->query($insertUsers) === TRUE) {
    echo 'Tabela de categoria populada com sucesso!<br>';
  }
  else {
   echo 'Error: '. $conn->error;
  }

?>

























