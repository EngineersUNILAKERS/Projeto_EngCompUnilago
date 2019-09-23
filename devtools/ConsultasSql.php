<?php

class ConsultasBanco
{
    public function ConectarBanco()
    {
      require('../config.php');

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
        $email[] = $lista['Nome'];
            
      }
      return $email;
    } 
}

  