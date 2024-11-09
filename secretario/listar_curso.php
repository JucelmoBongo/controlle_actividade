<?php
// a sessão ira ser terminada(encerrada) em 30 segundos
session_cache_expire(30);
// incluindo a conexão com o banco de dados nesta pagina
require_once "../config/conexao.php";
session_start(); //iniciando a  sessão

// se não existir na variavel Global $_SESSION um dado com nome nome_adm
if(!isset($_SESSION['nome_secretario'])){

//   direciona ele para a pagina index
    header("location:../index.php");
  
  }

/*Consultando ao banco de dados na tabela cursos;
*Junta(join) a tabela cursos com tabela disciplina onde na tabela cursos id_disciplina for igual ao id_disciplina da tabela disciplina
*/ 
$resul = $conectar->query("SELECT * FROM cursos join disciplina on cursos.id_disciplina=disciplina.id_disciplina ");





?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <!--Link de estilo importado-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- meu estilo -->
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/professor.css">
    <link rel="stylesheet" href="../css/botoes.css">
    
</head>
<body>


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
                <h1>Listas de Cursos</h1>
            </div>
           <table class="table table-striped table-hover "> 
                <thead>

                   
                    <tr>
                        <th colspan="1">#</th>
                        <th>Nome</th>
                        <th>Disciplina </th>
            
                    </tr>
                </thead>
                <?php
               
                    // se a condição for verdadeira busca os dados(objecto ou array) que estão na variavel $result e guarda ela na variavel $row
                    while ($row = $resul->fetchObject()) {
                      
                    
                //    imprime os dados(objecto ou array) encontrado como:
                // id do curso
                // nome do curso
                    
                    ?>
                    <tbody>
                        <tr>
                            <td ><?=$row->id_curso?></td>
                            <td><?=$row->nome_curso?></td>
                            <td><?=$row->nome_disciplina?></td>
                            <td>
                                

                            </td>
                        </tr>
                       <?php
                    }
                       ?>
                        
                    </tbody>
           </table> 
    </div> <!-- /.container-->
      


        
    </section>
  


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>