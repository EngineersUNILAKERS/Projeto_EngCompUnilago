<?php

class ConsultasBanco
{
    public function ConectarBanco()
    {
     
      $con=mysqli_connect("localhost","root","","englakersdb"); 
      // Check connection
      if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        return $con;
    }
}
// //____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
// //____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
//      public function PorcentagemAtividades($idCurso, $idAluno)
//      {
//       $ConsultasBanco = new ConsultasBanco;
//       //Comando que retorna a quantidade de atividades concluídas pelo aluno em um determinado curso
//       $sql1 ="SELECT COUNT(c.id) AS countrecord FROM mdl_course_modules_completion c INNER JOIN mdl_course_modules m ON c.coursemoduleid = m.id WHERE c.userid=$idAluno AND m.course=$idCurso AND m.completion > 0 AND c.completionstate > 0 ";
//       $QtdConcluidaAluno =mysqli_query($ConsultasBanco->ConectarBanco(),$sql1);
     
//       //Comando que retorna a quantidade de atividades que possuem a conclusão ativa em um curso
//       $sql2 = "SELECT COUNT(id) AS countrecord FROM mdl_course_modules WHERE course=$idCurso AND completion > 0 AND deletioninprogress = 0";
//       $QtdConclusaoCurso = mysqli_query($ConsultasBanco->ConectarBanco(),$sql2);  
//       //echo $sql2.'<br>';
//       while($exibe = mysqli_fetch_assoc($QtdConcluidaAluno))
//       {
        
//         $TotalAluno = $exibe['countrecord'];
//       }
      

//       while($exibe = mysqli_fetch_assoc($QtdConclusaoCurso))
//       {
        
//         $TotalCurso = $exibe['countrecord'];
//       }
//       if((($TotalAluno*100)/$TotalCurso)>100)
//       {
//         echo 'Alguns dados serão atualizados em instantes!';
//         return '100%';
//       }
//       else
//       {
//         return round(($TotalAluno*100)/$TotalCurso).'%';
//       }
      
      
      
//      }
// //____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
// //____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
//      public function ListaAlunos($IdCurso, $opcao)
//      {
//       $ConsultasBanco = new ConsultasBanco;
//       $AbreDiv = '<div>';
//       $FecharDiv = '</div>';

//       $AbreTabela = '<table border="1">';
//       $FechaTabela = '</table>';

//       $AbreLinha = '<tr>';
//       $FechaLinha = '</tr>';

//       $AbreDados = '<td align="center" valign="middle" width="200px">'; 
//       $FechaDados = '</td>';

//       //if($opcao == '1')
//       //{
//       $Aluno="SELECT u.id, u.firstname,u.lastname, u.email FROM mdl_role_assignments rs INNER JOIN mdl_user u ON u.id=rs.userid INNER JOIN mdl_context e ON rs.contextid=e.id WHERE e.contextlevel=50 AND rs.roleid=5 ORDER BY u.id ASC";  
//      // }
//       //else if($opcao == '2')
//       //{

//       //}
//       //else if($opcao == '3')
//       //{
//       //$Aluno="SELECT u.id, u.firstname,u.lastname, u.email FROM mdl_role_assignments rs INNER JOIN mdl_user u ON u.id=rs.userid INNER JOIN mdl_context e ON rs.contextid=e.id WHERE e.contextlevel=50 AND rs.roleid=5 AND e.instanceid=$IdCurso ORDER BY u.id ASC";
//       //}

//       $Alunos=mysqli_query($ConsultasBanco->ConectarBanco(),$Aluno);
//       //Armazenando nome do curso e id em variaveis
//       while($user = mysqli_fetch_assoc($Alunos))
//       {
//       $VetorAlunos[] = $user['firstname'];  
//       $IdAlunos[] = $user['id'];  
//       }  

      
//       for ($i=0; $i < count($VetorAlunos); $i++)
//       {
//        echo
//        $AbreLinha.
//        $AbreDados.
//        $VetorAlunos[$i].
//        $FechaDados.
//        $FechaLinha;
//       }
        
     
//     }
// //____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________    
// //____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
//      public function RelatorioNota($IdCurso)
//      {
//       $ConsultasBanco = new ConsultasBanco;


//       if($IdCurso != '--')
//       {
//       //Variáveis com Tags HTML
//       $AbreDiv = '<div>';
//       $FecharDiv = '</div>';

//       $AbreTabela = '<table border="1">';
//       $FechaTabela = '</table>';

//       $AbreLinha = '<tr>';
//       $FechaLinha = '</tr>';

//       $AbreDados = '<td align="center" valign="middle" width="200px">'; 
//       $FechaDados = '</td>';


//       //Efetuando os selects
//       //Listando Alunos do Curso
//       $Aluno="SELECT u.id, u.firstname,u.lastname, u.email FROM mdl_role_assignments rs INNER JOIN mdl_user u ON u.id=rs.userid INNER JOIN mdl_context e ON rs.contextid=e.id WHERE e.contextlevel=50 AND rs.roleid=5 AND e.instanceid=$IdCurso ORDER BY u.id ASC";
//       //Selecionando o Curso
//       $Curso = "SELECT id,fullname FROM mdl_course WHERE id=$IdCurso";
//       //Listando os itens de nota 
//       $ProvasCurso ="SELECT id,itemname,itemtype,gradetype,scaleid FROM mdl_grade_items WHERE courseid=$IdCurso AND itemtype ='mod'";
//       //Listando o nome da nota geral do curso
//       $NotaCurso ="SELECT id,itemname,itemtype,gradetype,scaleid FROM mdl_grade_items WHERE courseid=$IdCurso AND itemtype ='course'";
//       //Pegando o Id do item 
//       $ProvasNotas ="SELECT g.id,g.itemid,g.userid,g.finalgrade,i.itemtype FROM mdl_grade_grades g INNER JOIN mdl_grade_items i ON g.itemid=i.id WHERE i.courseid= $IdCurso ORDER BY g.userid ASC, g.itemid ASC";

//       $ContaNotas = "SELECT COUNT(distinct g.itemid) AS countrecord FROM mdl_grade_grades g INNER JOIN mdl_grade_items i ON g.itemid=i.id WHERE i.courseid= $IdCurso";


//       $Alunos=mysqli_query($ConsultasBanco->ConectarBanco(),$Aluno);
//       $ListaCursos=mysqli_query($ConsultasBanco->ConectarBanco(),$Curso);
//       $ListaProva=mysqli_query($ConsultasBanco->ConectarBanco(),$ProvasCurso);
//       $NotaProva=mysqli_query($ConsultasBanco->ConectarBanco(),$ProvasNotas);
//       $NotaGeral=mysqli_query($ConsultasBanco->ConectarBanco(),$NotaCurso);
//       $ContaProva=mysqli_query($ConsultasBanco->ConectarBanco(),$ContaNotas);

//       //Armazenando nome do curso e id em variaveis
//       while($exibe = mysqli_fetch_assoc($ListaCursos))
//           {
//           $NomeCurso[] = $exibe['fullname'];
//           $idCurso[] = $exibe['id'];
//           }
//       while($exibe = mysqli_fetch_assoc($ContaProva))
//       {
//       $QtdNotas[] = $exibe['countrecord'];
//       }    
//       while($exibe = mysqli_fetch_assoc($NotaGeral))
//           {
//           $NomeNotaGeral[] = $exibe['itemname'];
//           }
//           if($NomeNotaGeral[0]==null)
//           {
//             $NomeNotaGeral[0] ='Nota Final do Curso';
//           }
            

//       while($grade = mysqli_fetch_assoc($NotaProva))
//         {
//           $VetorNota[] = $grade['itemid'];  
//           $VetorUserId[] = $grade['userid'];
//           $FinalGrade[]= $grade['finalgrade'];
//           $TipoProva[] = $grade['itemtype'];
//         }

//       while($user = mysqli_fetch_assoc($Alunos))
//         {
//           $VetorAlunos[] = $user['firstname'];  
//           $IdAlunos[] = $user['id'];  
//         }  

//         while($item = mysqli_fetch_assoc($ListaProva))
//         {
//           $itemNotas[]= $item['itemname'];
//         }
        
//         //print_object($TipoProva);
        
       
          
      
//       //Imprimindo a tabela
//       echo 
//       $AbreTabela.

//       $AbreLinha;

//       //Nomes dos alunos
      
      
//       //display:none

//       //Nota final do curso
//       echo
//       $AbreDados.
//       $NomeNotaGeral[0].
//       $FechaDados;

//       //Itens de nota
//       for ($y=0; $y < count($itemNotas); $y++)
//       {
//         echo
//         $AbreDados.
//         $itemNotas[$y].
//         $FechaDados;
//       }

//       $FechaLinha;

//       //Imprimindo Nome dos Alunos   
//         for ($i=0; $i < count($VetorAlunos); $i++)
//         {
          
//             echo
//             $AbreLinha;
                       
//             for ($j=0; $j < count($VetorNota); $j++)
//             { 
//             //Imprimindo notas dos itens            
//               if($VetorUserId[$j]==$IdAlunos[$i])
//               {
//                 echo
//                 $AbreDados;
                        
//                   if($TipoProva[$j]=="course")
//                   {
//                   echo round($FinalGrade[$j]/count($itemNotas),2);
//                   echo $FechaDados;
//                   }
//                   else
//                   {
//                     echo round($FinalGrade[$j],2);
//                     echo $FechaDados;
//                   }
                                    
//                }
//                else
//                {
//                 echo
//                 $AbreDados.
//                 'Sem Nota'.
//                 $FechaDados;
//                }
               
                 
            
//             }
          
//         }       
            
//           echo $FechaLinha; 

//       echo  
//       $FechaTabela;


//       }
//       else if($IdCurso == '--')
//       {
//         header("Location:Relatorio1.php");
//       }
     
//      }
// //____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
// //____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
//      public function RelatorioConclusao($IdCurso)
//      {
//       if($IdCurso != '--')
//       {
//       //Variáveis com Tags HTML
//       $AbreDiv = '<div>';
//       $FecharDiv = '</div>';
      
//       $AbreTabela = '<table border="1">';
//       $FechaTabela = '</table>';
      
//       $AbreLinha = '<tr>';
//       $FechaLinha = '</tr>';
      
//       $AbreDados = '<td align="center" valign="middle" width="200px">'; 
//       $FechaDados = '</td>';
      
//       $ConsultasBanco = new ConsultasBanco;
      
//       //Efetuando os selects
//       $Aluno="SELECT u.id, u.firstname,u.lastname, u.email FROM mdl_role_assignments rs INNER JOIN mdl_user u ON u.id=rs.userid INNER JOIN mdl_context e ON rs.contextid=e.id WHERE e.contextlevel=50 AND rs.roleid=5 AND e.instanceid=$IdCurso ORDER BY u.id ASC";
//       $Curso = "SELECT id,fullname FROM mdl_course WHERE id=$IdCurso";
      
//       $result=mysqli_query($ConsultasBanco->ConectarBanco(),$Aluno);
//       $ListaCursos1=mysqli_query($ConsultasBanco->ConectarBanco(),$Curso);
//       $ListaCursos2=mysqli_query($ConsultasBanco->ConectarBanco(),$Curso);
//       $ListaIdCursos=mysqli_query($ConsultasBanco->ConectarBanco(),$Curso);
      
      
//       while($exibe = mysqli_fetch_assoc($ListaCursos1))
//           {
//            $NomeCurso[] = $exibe['fullname'];
//            $idCurso[] = $exibe['id'];
//           }
         
//       echo 
//       '<a href="Relatorio1.php">Voltar</a><br><br>'.
//       'Curso: '. $NomeCurso[0].'<br><br>';
       
      
//       //Imprimindo a tabela
//       echo 
//       $AbreTabela.
      
//       $AbreLinha.
      
//       $AbreDados.
//       'Nome'.
//       $FechaDados.
      
      
//       $AbreDados.
//       'Curso'.
//       $FechaDados.
      
      
//       $AbreDados.
//       'Conclusão'.
//       $FechaDados.
      
//       $FechaLinha;
      
//       //Nome dos Alunos
//       while($usuario = mysqli_fetch_assoc($result))
//       {  
//         echo 
//         $AbreLinha.
      
//         $AbreDados.
//         $usuario['firstname'].
//         $FechaDados;
//           //Nome dos Cursos
      
//           echo
//           $AbreDados.
//           $NomeCurso[0].
//           $FechaDados;
      
//           //Porcentagem dos cursos
//           $ConsultasBanco = new ConsultasBanco;
//           echo 
//           $AbreDados.
//           $ConsultasBanco->PorcentagemAtividades($idCurso[0], $usuario['id']).
//           $FechaDados;
          
          
//        echo $FechaLinha;
        
//       }
//        echo  
//        $FechaTabela;
      
//       // Free result set
//       mysqli_free_result($result);
      
//       mysqli_close($con);
      
//       }
//       else if($IdCurso == '--')
//       {
//         header("Location:Relatorio1.php");
//       }
//      }
//      public function EfetuaSelect($Select)
//      {
//       $ConsultasBanco = new ConsultasBanco;
            
     
            
//       return $result;
//      }

//      public function ImprimeNome()
//      {
//       $ConsultasBanco = new ConsultasBanco;

//      $SelectAtividade = "SELECT cm.id,cm.instance,cm.section,cm.module,m.name AS modulename FROM mdl_course_modules cm INNER JOIN mdl_modules m ON m.id=cm.module  WHERE cm.course=2 and cm.deletioninprogress = 0 and cm.completion >0 and cm.visible =1";
//      $result=mysqli_query($ConsultasBanco->ConectarBanco(),$SelectAtividade);
//      while($exibe = mysqli_fetch_assoc($result))
//      {
//       $modulename[] = $exibe['modulename'];
//       $instance[] = $exibe['instance'];
//       $IdMod[] = $exibe['id'];
//      }

    
//      $SelectOrdem = "SELECT sequence FROM `mdl_course_sections` where section =0 and course = 2";
//      $result3=mysqli_query($ConsultasBanco->ConectarBanco(),$SelectOrdem);
//      while($exibe = mysqli_fetch_assoc($result))
//      {
//       $sequence[] = $exibe['sequence'];
//      }
//      $sequencia = explode(",", $sequence);

//      for ($h=0; $h < count($sequence); $h++)
//      {
//       for ($u=0; $u < count($modulename); $u++)
//       {
//         if($sequencia[$h]==$IdMod[$u])
//         {
//             echo $modulename[$u];
//         }

//       }

//      }

//      $Prefix = "mdl_";
//      for ($i=0; $i < count($modulename); $i++)
//      {
//       $NomeTabela = $Prefix.$modulename[$i];
//       $IdAtividade = $instance[$i];
//       $SelectAtividade2 ="SELECT name FROM $NomeTabela WHERE id=$IdAtividade";

//      $result2=mysqli_query($ConsultasBanco->ConectarBanco(),$SelectAtividade2);
//      while($exibe = mysqli_fetch_assoc($result2))
//      {
//       $NomeAtividade[] = $exibe['name'];
//      }
     
//      }

     
//      return $instance;
     
          

//      }

// }

// $ConsultasBanco = new ConsultasBanco;

// $var= $ConsultasBanco->ImprimeNome();
// //$pizza  = "1,5,8,3,4,7,2";
// //$pieces = explode(",", $pizza);
// for ($j=0; $j < count($var); $j++)
//      {
    
//       echo $var[$j];

    
    
     
     
//      }
//      //$modinfo = get_fast_modinfo($COURSE->id[2]);
     


//     /*$ConsultasBanco = new ConsultasBanco;     

//       $NotasAlunos ="SELECT g.rawgrade FROM mdl_grade_grades g INNER JOIN mdl_grade_items i ON g.itemid=i.id WHERE i.courseid=2 and g.userid = 3 and g.id =3";
  
//       $result=mysqli_query($ConsultasBanco->ConectarBanco(), $NotasAlunos);

//       while($exibe = mysqli_fetch_assoc($result))
//       {
        
//         $nota[] = $exibe['rawgrade'];
//       }
//       echo round($nota[0], 2);  */






// /*$con=mysqli_connect("localhost","root","","db_eadmobile");
//       // Check connection
//       if (mysqli_connect_errno())
//         {
//           echo "Failed to connect to MySQL: " . mysqli_connect_error();
//         }
//         else
//         {
//           echo "Conectado".'<br>'.'<br>';
//         }
//       //Comando que retorna a quantidade de atividades concluídas pelo aluno em um determinado curso
//       $sql1 ="SELECT COUNT(c.id) AS countrecord FROM mdl_course_modules_completion c INNER JOIN mdl_course_modules m ON c.coursemoduleid = m.id WHERE c.userid=5 AND m.course=24 AND m.completion > 0 AND c.completionstate > 0";
//       $QtdConcluidaAluno =mysqli_query($con,$sql1);

//       //Comando que retorna a quantidade de atividades que possuem a conclusão ativa em um curso
//       $sql2 ="SELECT COUNT(id) AS countrecord FROM mdl_course_modules WHERE course=24 AND completion > 0 AND deletioninprogress = 0";
//       $QtdConclusaoCurso =mysqli_query($con,$sql2);  

//       while($exibe = mysqli_fetch_assoc($QtdConcluidaAluno))
//       {
//         echo $exibe['countrecord'].'<br>';
//         $TotalAluno = $exibe['countrecord'];
//       }

//       while($exibe = mysqli_fetch_assoc($QtdConclusaoCurso))
//       {
//         echo $exibe['countrecord'];
//         $TotalCurso = $exibe['countrecord'];
//       }
     
     
//    echo '<br>'.round(($TotalAluno*100)/$TotalCurso).'%';*/
  