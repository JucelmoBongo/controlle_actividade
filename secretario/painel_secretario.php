<?php
// a session ira expirar em 30 seconds
session_cache_expire(30);
// incluindo a conexao com o banco de dados
include '../config/conexao.php';
// iniciando a session
session_start(); 

// se nao existir na variavel(array) de $session um dado nome_secretario
if(!isset($_SESSION['nome_secretario'])){
//   redireciona para a index
     header("location:../index.php");
   
   } 
   // buscando o total dos cursos
$query_cursos = "SELECT COUNT(id_curso) AS total_cursos FROM cursos";
$query_cursos = $conectar->prepare($query_cursos);
$query_cursos->execute();
$row_cursos = $query_cursos->fetch(PDO::FETCH_ASSOC);

// buscando o total de actividade geral
$query_actividade_geral = "SELECT COUNT(id_actividade_geral) AS total_actividade_geral FROM actividade_geral";
$query_actividade_geral = $conectar->prepare($query_actividade_geral);
$query_actividade_geral->execute();
$row_actividade_geral = $query_actividade_geral->fetch(PDO::FETCH_ASSOC);

// buscando o total de actividades do curso
$query_actividadeCurso = "SELECT COUNT(id_actividade_curso) AS total_actividadeCurso FROM actividade_curso";
$query_actividadeCurso = $conectar->prepare($query_actividadeCurso);
$query_actividadeCurso->execute();
$row_actividadeCurso = $query_actividadeCurso->fetch(PDO::FETCH_ASSOC);



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
     
     <link rel="stylesheet" href="../css/pagina_admin.css">
     <link rel="stylesheet" href="../css/botoes.css">
     <link rel="stylesheet" href="../css/navbar.css">
    <title>Painel Secretario - <?=$_SESSION['nome_secretario']?></title>
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
                         <li><a href="estudante.php" class="li-link"><i class="fas fa-user-tie"></i><span class="nav-item">Estudante</span></a></li>
                         <li><a href="listar_curso.php" class="li-link"><i class="fas fa-lightbulb"></i><span class="nav-item">Cursos</span></a></li>
                         <li><a href="../sair.php" class="logo-out"><i class="fas fa-sign-out-alt"></i><span class="nav-item">Terminar Sessão</span></a></li>
                     
                    </ul>
               </nav>
          </header>
          <section class="section-dashbord">
               <div class="dashbord-div">
                    <h2>Controlo de Actividade</h2>
                    
                    <aside class="dashbord-aside">
                         <div class="dashbord-card" style="margin-bottom:24px">
                              
                              <div class="card">
                                   <span class="card-span"><h4>Actividades Geral</h4></span>
                                   <aside class="card-aside">
                                        <i class="fas fa-calendar-check" id="fas"></i>
                                        <p class="card-aside-p">
                                        <?php
                                        echo $row_actividade_geral['total_actividade_geral']
                                       ?>
                                          
                                        </p>
                                   </aside>
                                   
                              </div>
                              <div class="card">
                                   <span class="card-span"><h4>Total Actividades curso</h4></span>
                                   <aside class="card-aside">
                                        <i class="fas fa-calendar-check" id="fas"></i>
                                        <p class="card-aside-p">
                                       <?php
                                        echo $row_actividadeCurso['total_actividadeCurso']
                                       ?>
                                           
                                        </p>
                                   </aside>
                              </div>
                              <div class="card">
                                   <span class="card-span"><h4>Total de Cursos </h4></span>
                                   <aside class="card-aside">
                                        <i class="fas fa-calendar-check" id="fas"></i>
                                        <p class="card-aside-p">
                                          <?php
                                          echo $row_cursos['total_cursos'];
                                          ?>
                                        </p>
                                   </aside>
                              </div>
                           
                             
                         </div>
                    </aside>

               </div>

         

               <div class="dashbord-div">
                    <h2> Escolha Uma  Opção </h2>
                    <aside class="dashbord-aside">
                         <div class="dashbord-card">

                              <div class="card-modal">
                                  <a href="actividade_geral.php" style="text-decoration:none"> 
                                             <button type="button" class="botao " id="btn-modal">
                                                  <i class="fas fa-calendar-check" id="fas"></i>
                                                  <p class="card-aside-modal">Actividades Geral</p>
                                             </button>
                                   </a>
                                   
                              </div>                  

                              <div class="card-modal">
                                   <a href="actividade_curso.php" style="text-decoration:none"> 
                                        <button type="button" class="botao " id="btn-modal" >
                                             <i class="fas fa-calendar-check" id="fas"></i>
                                             <p class="card-aside-modal">Actividades do curso</p>
                                        </button> 
                                   </a>
                                   
                                   
                              </div>   

                              <div class="card-modal">
                                   <a href="listar_curso.php" style="text-decoration:none">
                                   <button type="button" class="botao" id="btn-modal">
                                        <i class="fas fa-user" id="fas"></i>
                                        <p class="card-aside-modal ">Estudante</p>
                                   </button>
                                   </a>


        


                                 
                              </div><!--card-modal-->   
                            
                              

                         </div>                  
                    </aside>
               </div>
          </section>
     </section>
          
</section>
</body>
</html>