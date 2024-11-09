<?php
session_cache_expire(30);
require_once "config/conexao.php";
session_start();
if(!isset($_SESSION['email'])){
  
    header("location:index.php");
  
  } 

$resul = $conectar->query("SELECT * FROM cursos ");

if (isset($_POST['curso'])) {
  $nome_curso = $_POST['curso'];
//   consultando se o curso já exist
  $nomeExiste = $conectar->query("SELECT * FROM cursos WHERE nome_curso = '$nome_curso'");

//   verificando se existe um curso o mesmo nome digitado
  if ($nomeExiste->rowCount() ) {
    ?>
    <script> 
      alert(" Não pode ser cadastrado com esse email porque já exite");
      </script>
    <?php
    
  }
  else {
    $conectar->query("INSERT INTO cursos(nome_curso) VALUES('$nome_curso')");
    header("location:listar_curso.php");
  }

  

}



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
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/professor.css">
    <link rel="stylesheet" href="css/botoes.css">
    
</head>
<body>


<header>
                    <nav>
                         <ul>
                              <div class="div-foto"><img class="foto-perfil" src="#" alt=""></div>
                              <li><div class="li-div"><p class="p">ADMINISTRADOR</p></div></li>
                              <li><a href="#" class="li-link"><i class="fas fa-user"></i><span class="nav-item">Perfil</span></a></li>
                              <li><a href="adm.php" class="li-link"><i class="fas fa-home"></i><span class="nav-item">Home</span></a></li>
                              <li><a href="funcionario.php" class="li-link"><i class="fas fa-user-tie"></i><span class="nav-item">Funcionários</span></a></li>
                              <li><a href="#" class="li-link"><i class="fas fa-lightbulb"></i><span class="nav-item">Cursos</span></a></li>
                              <li><a href="#" class="li-link"><i class="fas fa-calendar-check"></i><span class="nav-item">Actividade</span></a></li>
                              <li><a href="#" class="logo-out"><i class="fas fa-sign-out-alt"></i><span class="nav-item">Terminar Sessão</span></a></li>
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
                        
                        <th>Acções</th>
                    </tr>
                </thead>
                <?php
               
                    
                    while ($row = $resul->fetchObject()) {
                      
                    
                   
                    
                    ?>
                    <tbody>
                        <tr>
                            <td ><?=$row->id_curso?></td>
                            <td><?=$row->nome_curso?></td>
                            <td>
                                <a href="editar_curso.php?id=<?=$row->id_curso?>" class="btn btn-info btn-lg btn-sm btn-xr color-white" title="Editar curso">editar</a>
                                <a href="apagar_curso.php?id=<?=$row->id_curso?>" class="btn btn-danger btn-lg btn-sm btn-xr color-white" title="Apagar curso">Apagar</a>
                              
            <!-- <button type="button" class="btn btn-danger btn-lg btn-sm btn-xr" data-toggle="modal" data-target="#apagarFuncionario">
                Apagar
            </button>
                <div class="modal fade" id="apagarFuncionario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Você deseja apagar esse registro?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="Texto-modal">
                                        
                                        </div>
                                        943755246
                                        <div class="form-modal-body">
                                            <div class="form-modal-body-div">
                                                  Escolhe com muita atensão porque os dados seram apagados permanentemente
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" type="reset" class="btn btn-success " data-dismiss="modal">Cancelar</a>
                                        <a href="apagar_curso.php?id=<?=$row->id_curso?>" class=" btn btn-danger ">Apagar</a>
                                    </div>
                              </div>
                        </div>
                </div>  -->
                            </td>
                        </tr>
                       <?php
                    }
                       ?>
                        
                    </tbody>
           </table> 
    </div> <!-- /.container-->
      


        <div class="card-modal">
            <button type="button" class="btn btn-primary botao " id="btn-modal" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-plus-circle" id="fas"></i>
                <p class="card-aside-modal ">Cursos</p>
            </button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                                <form action="#" class="modal-content" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Adicionar Novo Curso</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="Texto-modal">
                                            Insira o nome do Curso que deseja...
                                        </div>
                                        <div class="form-modal-body">
                                            <div class="form-modal-body-div">
                                                    <input required class="form-modal-Input"  type="text" name="curso" id="Função" placeholder="Nome..." pattern="[a-z A-Z áéíóú ÁÉÍÓÚ  ãõ ÃÕ ÂÔ çÇ]+$" title="Apenas texto" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="botao " data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="botao ">Adicionar</button>
                                    </div>
                                </form>
                        </div>
                </div>
                
         </div>   <!-- /.card-modar add curso -->
    </section>
  


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>