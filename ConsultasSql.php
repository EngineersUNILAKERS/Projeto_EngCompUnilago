<?php

class ConsultasBanco
{
    public function ConectarBanco()
    {
      require('config.php');

      $NomeDoServer=$GLOBALS['NomeDoServer'];
      $UserDoServer=$GLOBALS['UserDoServer'];
      $senha = $GLOBALS['senha'];
      $nomeDoBanco =$GLOBALS['nomeDoBanco'];
      
     
      $con=mysqli_connect($NomeDoServer,$UserDoServer,$senha,$nomeDoBanco); 
      // Check connection
      if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        return $con;
    }
//Select que retornará todos os usuários do sistema(adm e users normais)
    public function TodosUsuarios()
    {
     
      $ConsultasBanco = new ConsultasBanco;
  
      $sql="SELECT Nome FROM USERS";
      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
      
      
      while($nome = mysqli_fetch_assoc($result))
      {      
       $listaNomes[] = $nome;
      }
      foreach($listaNomes as $lista)
      {
        $nome[] = $lista['Nome'];
      }
      return $nome;
    }
//Select que retornará todos os ADM do sistema
    public function ListaDeUsuarios()
    {
     
      $ConsultasBanco = new ConsultasBanco;
  
      $sql="SELECT Nome FROM USERS WHERE Grupo_Id = 1";
      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
      
      
      while($nome = mysqli_fetch_assoc($result))
      {      
       $listaNomes[] = $nome;
      }
      foreach($listaNomes as $lista)
      {
        $nome[] = $lista['Nome'];
      }
      return $nome;
    }
//Select que retornará todos os ADM do sistema
    public function ListaDeAdm()
    {
    
      $ConsultasBanco = new ConsultasBanco;

      $sql="SELECT Nome FROM USERS WHERE Grupo_Id = 2";
      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
      
      
      while($nome = mysqli_fetch_assoc($result))
      {      
      $listaNomes[] = $nome;
      }
      foreach($listaNomes as $lista)
      {
        $nome[] = $lista['Nome'];
      }
      return $nome;
    } 
//Select que retornará um usuário em específico
    public function usuario($IdDoUsuario)
    {
    
      $ConsultasBanco = new ConsultasBanco;

      $sql="SELECT Nome FROM USERS WHERE Id_Cli = ".$IdDoUsuario;
      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
      
      
      while($nome = mysqli_fetch_assoc($result))
      {      
      $listaNomes[] = $nome;
      }
      foreach($listaNomes as $lista)
      {
        $nome[] = $lista['Nome']; 
      }
      return $nome;
    }   
    //Select que retornará um usuário em específico pesquisado pelo nome
    public function nomeUsuario($NomeDoUsuario)
    {
    
      $ConsultasBanco = new ConsultasBanco;

      $sql="SELECT Nome FROM USERS WHERE Nome = ".$NomeDoUsuario;
      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
      
      
      while($nome = mysqli_fetch_assoc($result))
      {      
      $listaNomes[] = $nome;
      }
      foreach($listaNomes as $lista)
      {
        $nome[] = $lista['Nome'];
      }
      return $nome;
    } 
    public function ListaEmail()
    {
      $ConsultasBanco = new ConsultasBanco;

      $sql="SELECT Email FROM USERS";
      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
      
      
      while($nome = mysqli_fetch_assoc($result))
      {      
      $listaNomes[] = $nome;
      }
      foreach($listaNomes as $lista)
      {
        $email[] = $lista['Email'];   
      }
      return $email;
    } 
    public function ListaCategorias()
    {
      $ConsultasBanco = new ConsultasBanco;

      $sql="SELECT CAT_Nome, CAT_Codigo FROM category";
      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
      
      
      while($nome = mysqli_fetch_assoc($result))
      {      
      $listaNomes[] = $nome;
      }
      foreach($listaNomes as $lista)
      {
        $categoria[] = $lista['CAT_Nome'];
        $categoria[] = $lista['CAT_Codigo'];   
      }
      return $categoria;
    } 
    public function Login()
    {

    //Quem for implementar o Login, olhe isso: https://www.devmedia.com.br/sistema-de-autenticacao-de-usuarios-em-php-usando-sessoes-e-mysql/37258
    //   $ConsultasBanco = new ConsultasBanco;

    //   $sql="SELECT CAT_Nome, CAT_Codigo FROM category";
    //   $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);
      
      
    //   while($nome = mysqli_fetch_assoc($result))
    //   {      
    //   $listaNomes[] = $nome;
    //   }
    //   foreach($listaNomes as $lista)
    //   {
    //     $categoria[] = $lista['CAT_Nome'];
    //     $categoria[] = $lista['CAT_Codigo'];   
    //   }
      return null;
    } 
    public function SelectProd()
    {
    
      $ConsultasBanco = new ConsultasBanco;

      $sql=("SELECT PRO_Codigo, PRO_Nome, PRO_Descricao, PRO_Foto, PRO_Preco, PRO_Estoque FROM products");
      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);

      while($nome = mysqli_fetch_assoc($result))
      {      
      $listaNomes[] = $nome;
      }
      return $listaNomes;
    }
    public function PesquisaProd($pesquisar)
    {
    
      $ConsultasBanco = new ConsultasBanco;

      $sql=("SELECT * FROM products WHERE PRO_Nome LIKE '%$pesquisar%' LIMIT 5");
      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);

      while($nome = mysqli_fetch_assoc($result))
      {      
      $listaNomes[] = $nome;
      }
      return $listaNomes;
    }

//select pra buscar informaçoes dos usuarios
    Public function SelectUsuarios()
    {
      
        $ConsultasBanco = new ConsultasBanco;

        $sql=("SELECT * FROM USERS");
        $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);

        while($nome = mysqli_fetch_assoc($result))
        {      
        $listaNomes[] = $nome;
        }
        return $listaNomes;
      

      
    }
// pesquisar usuarios 
    Public function PesquisarUsuarios()
    {
      $ConsultasBanco = new ConsultasBanco;

      $sql=("SELECT * FROM USERS WHERE Nome LIKE '%$pesquisar%' LIMIT 5");
      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$sql);

      while($nome = mysqli_fetch_assoc($result))
      {      
      $listaNomes[] = $nome;
      }
      return $listaNomes;
    }
}
