<?php

session_cache_expire(30);
include('../config/conexao.php'); 
session_start();

if(!isset($_SESSION['nome_adm'])){
 header("location:../index.php");

} 
 $id = $_GET["id"];
 try {
    if (isset($_POST['nome_curso'])) {
        $nome_curso= $_POST['nome_curso'];
        $disciplina = $_POST['disciplina'];

        $nomeExiste = $conectar->query("SELECT * FROM cursos WHERE nome_curso = '$nome_curso'");

        //   verificando se existe um curso o mesmo nome digitado
          if ($nomeExiste->rowCount() ) {
            ?>
            <!-- se existe o curso emite esse alerta -->
            <script> 
              alert(" Impossivel cadastrar esse curso porque já exite");
              </script>
            <?php
            
          }
        //   se nao insere na base de dados
          else {
               $conectar->query("UPDATE `cursos` SET `id_disciplina`='$disciplina',`nome_curso`='$nome_curso' WHERE id_curso = '$id'");
            
            // e direciona na pagina listar_cursos 
            header("location:listar_curso.php");
          }


        }
       
   $dados_user = $conectar->query("SELECT * FROM cursos WHERE id_curso ='$id'")->fetchObject();
 } catch (Exeption $e) {
   print_r($e);
 }
 



?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!--Links Bootstrap importados-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <!--Link de estilo importado-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Meu estilo -->
    <link rel="stylesheet" href="../css/botoes.css">
     <link rel="stylesheet" href="../css/navBar.css">
    <link rel="stylesheet" href="../css/widget func.css">
     <link rel="stylesheet" href="../css/Funcionarios.css">
     <link rel="stylesheet" href="../css/barra_pesquisa.css">
     <link rel="stylesheet" href="../css/m.css">
     <link rel="stylesheet" href="../css/professor.css">
     <link rel="stylesheet" href="../css/custom.css">
    <title>Editar Curso</title>
</head>
<body> 
<header>
               <nav>
                    <ul>
                         <div class="div-foto"><img class="foto-perfil" src="../img/estudante-negra.jpg" alt=""></div>
                         <li><div class="li-div"><p class="p">ADMINISTRADOR</p></div></li>
                         <li><a href="perfil_adm.php" class="li-link"><i class="fas fa-user"></i><span class="nav-item">Perfil</span></a></li>
                         <li><a href="adm.php" class="li-link"><i class="fas fa-home"></i><span class="nav-item">Home</span></a></li>
                         <li><a href="funcionario.php" class="li-link"><i class="fas fa-user-tie"></i><span class="nav-item">Funcionários</span></a></li>
                         <li><a href="professor.php" class="li-link"><i class="fas fa-user-tie"></i><span class="nav-item">Professores</span></a></li>
                         <li><a href="secretario.php" class="li-link"><i class="fas fa-user-tie"></i><span class="nav-item">Secretarios</span></a></li>
                         <li><a href="listar_curso.php" class="li-link"><i class="fas fa-lightbulb"></i><span class="nav-item">Cursos</span></a></li>
                         <li><a href="#" class="li-link"><i class="fas fa-calendar-check"></i><span class="nav-item">Actividade</span></a></li>
                         <li><a href="sair.php" class="logo-out"><i class="fas fa-sign-out-alt"></i><span class="nav-item">Terminar Sessão</span></a></li>
                     
                    </ul>
               </nav>
          </header>
          <section class="section-formulario">
               <div class="div-formulario">
          <div class="mae">
               <div class="filho">
                          <h2>Informe os dados do Curso</h2>
                    <form action="#" enctype="multipart/form-data" method="post">
                         <input type="text" name="nome_curso" placeholder="Nome" required value="<?=$dados_user->nome_curso?>">
                         <div>
                         <label>Disciplina</label>
                         <div class="col-sm-8">
                                <select  name="disciplina">
                                <?php
                                // fazendo uma consulta no banco de tados na tabela disciplina
                                    $query = $conectar->query("SELECT * FROM disciplina");
                                    // pega todos os dados e coloca na variavel $registro
                                    $registro = $query->fetchAll(PDO::FETCH_ASSOC);
                                        
                                    foreach ($registro as $opcao){

                                    
                                    ?>
                                    <option name="disciplina" value="<?=$opcao['id_disciplina']?>"><?=$opcao['nome_disciplina']?></option>
                                    <?php
                                    }
                                    ?> 
                                    </select>
                         </div>
                         </div>
                
                    
                         <button type="submit" class="botao">Salvar Alterações</button>
                    </form>
               </div>
        </div>
                    
               </div> <!-- div-formulario-->
          </section><!-- section-formulario -->

</body>
</html>