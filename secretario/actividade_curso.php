<?php

session_cache_expire(30);
require_once "../config/conexao.php";
session_start();
if(!isset($_SESSION['nome_secretario'])){
  
    header("location:../index.php");
  
  } 

$resul = $conectar->query("SELECT * FROM actividade_curso Join cursos ON actividade_curso.id_curso=cursos.id_curso Join estudante on cursos.id_curso=estudante.id_curso");


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
     <!--Links Bootstrap importados-->
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
     <!--Link de estilo importado-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     
     <link rel="stylesheet" href="../css/professor.css">
     <link rel="stylesheet" href="../css/botoes.css">
     <link rel="stylesheet" href="../css/navbar.css">
    <title>Painel Secretario - <?=$_SESSION['nome_estudante']?></title>
</head>
<body>
<section class="body-section">
<header>
               <nav>
                    <ul>
                         <div class="div-foto"><img class="foto-perfil" src="IMAGEM ADMIN/meu_avatar_ac.jpg" alt=""></div>
                         <li><div class="li-div"><p class="p" style="margin-left:10%">Secretario(a)</p></div></li>
                         <li><a href="perfil.php" class="li-link"><i class="fas fa-user"></i><span class="nav-item">Perfil</span></a></li>
                         <li><a href="painel_secretario.php" class="li-link"><i class="fas fa-home"></i><span class="nav-item">Home</span></a></li>
                         <li><a href="listar_professor.php" class="li-link"><i class="fas fa-user-tie"></i><span class="nav-item">Professores</span></a></li>
                         <li><a href="#" class="li-link"><i class="fas fa-user-tie"></i><span class="nav-item">Estudante</span></a></li>
                         <li><a href="listar_curso.php" class="li-link"><i class="fas fa-lightbulb"></i><span class="nav-item">Cursos</span></a></li>
                         <li><a href="../sair.php" class="logo-out"><i class="fas fa-sign-out-alt"></i><span class="nav-item">Terminar Sessão</span></a></li>
                     
                    </ul>
               </nav>
          </header>
          <section class="section-formulario">
    <div class="container">
            <div class="page-header">
                <h1 style="padding-top:5%;padding-left:2%;padding-bottom:2%">Actividades do curso</h1>
            </div>
           <table class="table table-striped table-hover "> 
                <thead>

                   
                    <tr>
                        <th colspan="1">#</th>
                        <th>Decrição da Actividade</th>
                        <th>Data de Inserção</th>
                        <th>Data da Realização</th>
                        
                        <th>curso</th>
                    </tr> 
                </thead>
                <?php
               
                    // se a condição for verdadeira busca os dados(objecto ou array) que estão na variavel $result e guarda ela na variavel $row
                    while ($row = $resul->fetchObject()) {
                        //    imprime os dados encontrado no array encontrado
                    
                   
                    
                    ?>
                    <tbody>
                        <tr>
                            <td ><?=$row->id_actividade_curso?></td>
                            <td><?=$row->nome?></td>
                            <td><?=$row->data_insercao?></td>
                            <td><?=$row->data_realizar?></td>
                            <td><?=$row->nome_curso?></td>
                           
                        </tr>
                       <?php
                    }
                       ?>
                        
                    </tbody>
           </table> 
    </div> <!-- /.container-->
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</section>
</body>
</html>