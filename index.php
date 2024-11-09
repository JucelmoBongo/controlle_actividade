<?php
// a sessão ira ser terminada(encerrada) em 30 segundos
session_cache_expire(30);
// incluindo a conexão com o banco de dados nesta pagina
include "config/conexao.php";

session_start(); //iniciando a  sessão

try {      
  // validando o login do usuario
    if (isset($_POST["email"])) {
      /* se existir um metodo post com o nome email então pega os dados e coloca nas variaveis */
          $email = $_POST["email"];
          $senha = md5($_POST["senha"]);
      /* pega na variavel $conectar e consulta no banco de dados na tabela adiministrador e verifica se os dados do banco de dados são iguais aos das variaveis
      e essa consulta armazena na variavel $res*/
          $res = $conectar->query("SELECT * FROM  administrador WHERE email = '$email' AND senha = '$senha' ");
          if(($res->rowCount())){
            // se existir um registo ou uma linha no banco de dados faça
            while ($d = $res->fetchObject()) {
              /* pega na variavel $res e me trás todos os dados em forma de um objecto e armazena na variavel $d
               e guarda esses mesmo dados na variavel GLOBAL do php $_ssession*/
                $_SESSION['id'] = $d->id;
                $_SESSION['nome_adm'] = $d->nome_adm;

                $_SESSION['email'] = $d->email;
                $_SESSION['senha'] = $d->senha;
                
                // leva-lhe para a area do administrador
                header("location:admin/adm.php");
            } /*fechando o while */
          }/*fechando o if filho */

          // se não existir  
          elseif (
             /* pega na variavel $conectar e consulta no banco de dados na tabela professor e verifica se os dados do banco de dados são iguais aos das variaveis
      e essa consulta armazena na variavel $res*/
            $res = $conectar->query("SELECT * FROM  professor WHERE email = '$email' AND senha = '$senha' ")) {
            # code...
            if(($res->rowCount())){
              // se existir um registo ou uma linha no banco de dados faça

              while ($d = $res->fetchObject()) {

              /* pega na variavel $res e me trás todos os dados em forma de um objecto e armazena na variavel $d
               e guarda esses mesmo dados na variavel GLOBAL do php $_ssession*/
                  $_SESSION['id_professor'] = $d->id_professor;
                  $_SESSION['id_disciplina'] = $d->id_disciplina;
                  $_SESSION['nome_professor'] = $d->nome_professor;
        
                  $_SESSION['email'] = $d->email;
                  $_SESSION['senha'] = $d->senha;
                  
                  // leva-lhe para a area do professor
                  header("location:professor/painel_professor.php");
              }/*fechando o while */
            }/*fechando o if filho */

            // se não existir
            elseif (
               /* pega na variavel $conectar e consulta no banco de dados na tabela secretario e verifica se os dados do banco de dados são iguais aos das variaveis
      e essa consulta armazena na variavel $res*/
              $res = $conectar->query("SELECT * FROM  secretario WHERE email = '$email' AND senha = '$senha' ")) {
              # code...
              if(($res->rowCount())){
        // se existir um registo ou uma linha no banco de dados faça
                while ($d = $res->fetchObject()) {
                 /* pega na variavel $res e me trás todos os dados em forma de um objecto e armazena na variavel $d
               e guarda esses mesmo dados na variavel GLOBAL do php $_ssession*/
                    $_SESSION['id_secretario'] = $d->id_secretario;
                    $_SESSION['nome_secretario'] = $d->nome_secretario;
          
                    $_SESSION['email'] = $d->email;
                    $_SESSION['senha'] = $d->senha;
                    
                    // leva-lhe para a area do professor
                    header("location:secretario/painel_secretario.php");
                }/*fechando o while */
              }/*fechando o if filho */ 
              elseif (
                $res = $conectar->query("SELECT * FROM  estudante WHERE email = '$email' AND senha = '$senha' ")) {
                # code...
                if(($res->rowCount())){
          
                  while ($d = $res->fetchObject()) {
                      $_SESSION['id_estudante'] = $d->id_estudante;
                      $_SESSION['id_curso'] = $d->id_curso;
                      $_SESSION['nome_estudante'] = $d->nome_estudante;
            
                      $_SESSION['email'] = $d->email;
                      $_SESSION['senha'] = $d->senha;
                      
                      
                      header("location:estudante/painel_estudante.php");
                  }/*fechando o while */
                }/*fechando o if filho */



                
              }
            }/*fechando elseif  filho*/
          }/*fechando elseif mae*/
          
          
            else {
            ?>
            <div style="background-color:red;color:white;padding:12px;">
              Dados Incorreto, tente outra vez!
            </div>
      <?php
          }/*fechando o else */ 
    } /*fechando o if mãe */
} catch (Exeption $e) {
print_r($e);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Acesso</title>
    <link rel="stylesheet" href="css/index.css">
    
</head>
<body>
    <div class="container">

        <div class="box-login">

            <h2 class="title">Entrar no sistema</h2>

            <form action="#" method="post">

                <input type="email" name="email" placeholder="Seu email">

                <input type="password" name="senha" placeholder="Sua senha">

                <button type="submit">Entrar</button>

                <div class="dividir"></div>
                <a href="#">Esqueceu sua senha?</a>
            </form>
        </div>
    </div>
</body>
</html>