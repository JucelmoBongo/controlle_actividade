<!DOCTYPE html>
<html lang="pt-pt">
<head>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Links Bootstrap importados-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


     <link rel="stylesheet" href="../css/pagina_admin.css">
     <link rel="stylesheet" href="Style/widget modal.css">
     <link rel="stylesheet" href="../css/navBar.css">
     <link rel="stylesheet" href="../css/Perfil Admin.css">
     <link rel="stylesheet" href="../css/botoes.css">
     <link rel="stylesheet" href="css/Modal Cadastro.css">
     
     <!--Link de estilo importado-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     
     <title>Perfil</title>
</head>
<body>
     <section class="body-section">
          <header>
          <nav>
                    <ul>
                         <div class="div-foto"><img class="foto-perfil" src="IMAGEM ADMIN/meu_avatar_ac.jpg" alt=""></div>
                         <li><div class="li-div"><p class="p" style="margin-left:10%">Estudante(a)</p></div></li>
                         <li><a href="perfil.php" class="li-link"><i class="fas fa-user"></i><span class="nav-item">Perfil</span></a></li>
                         <li><a href="painel_estudante.php" class="li-link"><i class="fas fa-home"></i><span class="nav-item">Home</span></a></li>
                         <li><a href="actividade_geral.php" class="li-link"><i class="fas fa-calendar-check"></i><span class="nav-item">Actividade geral</span></a></li>
                         <li><a href="actividade_curso.php" class="li-link"><i class="fas fa-calendar-check"></i><span class="nav-item">Actividade curso</span></a></li>
                         
                         <li><a href="../sair.php" class="logo-out"><i class="fas fa-sign-out-alt"></i><span class="nav-item">Terminar Sessão</span></a></li>
                     
                    </ul>
               </nav>
          </header>
          
          <section class="section-dashbord">
               <div class="dashbord-div">
                    <h2>Perfil</h2>
                    <aside class="dashbord-aside">
                         <section class="Botoes-Modal dashbord-aside-section"> 
                              <!-- Button trigger modal Novo Administrador -->
                              <button type="button"  class="btn" data-toggle="modal" data-target="#cadastrar_admin">
                                   Novo Administrador
                              </button>
          
                              <!-- Modal -->
                              <div class="modal fade" id="cadastrar_admin" tabindex="-1" role="dialog" aria-labelledby="cadastrar_admin" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form action="Perfil Admin.php" class="modal-content" method="POST">
                                             <div class="modal-header">
                                                  <h5 class="modal-title" id="cadastrar_admin">Cadastro</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                             </div>
                                             <div class="modal-body">
                                                  <div class="modal-body-weight">
                                                       <input type="radio" name="sessao" id="sessao-1">
                                                       <input type="radio" name="sessao" id="sessao-2">
                                                       <div class="weight-label">
                                                            <label for="sessao-1">1</label>
                                                            <label for="sessao-2">2</label>
                                                       </div>
                                                       <div class="modal-content-weight">
                                                            <div class="modal-content-weight-inner">
                                                                 <div class="inner-form-div">
                                                                      <div class="Form-div">
                                                                           <label for="Nome">Nome</label>
                                                                           <input required type="text" name="Nome_" id="Nome" class="InputTexT" pattern="[a-z A-Z áéíóú ÁÉÍÓÚ  ãõ ÃÕ ÂÔ çÇ]+$" title="Apenas texto">
                                                                      </div>
                                                                      <div class="Form-div">
                                                                           <label for="NIF">BI / NIF</label>
                                                                           <input required type="text" name="NIF" id="NIF" class="InputTexT" maxlength = "14">
                                                                      </div>
                                                                      <div class="Form-div">
                                                                           <label for="Estado">Estado</label>
                                                                           <!--<input type="date" name="Nascimento" id="Nascimento" class="InputTexT">-->
                                                                           <select required name="Estado" id="Estado" class="InputTexT">
                                                                                njfdgnv
                                                                           </select>
                                                                      </div>
                                                                      <div class="Form-div">
                                                                           <label for="Nascimento">D Nascim</label>
                                                                           <input required type="date" name="Nascimento" max="2003-01-01" min="1988-01-01" id="Nascimento" class="InputTexT">
                                                                      </div>
                                                                      <div class="Form-div">
                                                                           <label for="Gênero">Gênero</label>
                                                                           <!--<input type="date" name="Nascimento" id="Nascimento" class="InputTexT">-->
                                                                           <select required name="Genero" id="Gênero" class="InputTexT">
                                                                              jknejn
                                                                           </select>
                                                                      </div>
                                                                      <div class="Form-div">
                                                                           <label for="Telefone">Telefone</label>
                                                                           <input required type="tel" name="Telefone" id="Telefone" class="InputTexT" pattern="[0-9]+$" maxlength = "9">
                                                                      </div>
                                                                 </div>
                                                            
                                                                 <div class="inner-form-div">
                                                                      <div class="Form-div">
                                                                           <label for="País">País</label>
                                                                           <input required type="text" name="Pais" id="País" class="InputTexT" pattern="[a-z A-Z áéíóú ÁÉÍÓÚ  ãõ ÃÕ ÂÔ çÇ]+$" title="Apenas texto" maxlength = "15">
                                                                      </div>
                                                                      <div class="Form-div">
                                                                           <label for="Província">Província</label>
                                                                           <input required type="text" name="Provincia" id="Província" class="InputTexT" pattern="[a-z A-Z áéíóú ÁÉÍÓÚ  ãõ ÃÕ ÂÔ çÇ]+$" title="Apenas texto" maxlength = "15">
                                                                      </div>
                                                                      <div class="Form-div">
                                                                           <label for="Munícipio">Munícipio</label>
                                                                           <input required type="text" name="Municipio" id="Munícipio" class="InputTexT" pattern="[a-z A-Z áéíóú ÁÉÍÓÚ  ãõ ÃÕ ÂÔ çÇ]+$" title="Apenas texto" maxlength = "15">
                                                                      </div>
                                                                      <div class="Form-div">
                                                                           <label for="Bairro">Bairro </label>
                                                                           <input required type="text" name="Bairro" id="Bairro" class="InputTexT" pattern="[a-z A-Z áéíóú ÁÉÍÓÚ  ãõ ÃÕ ÂÔ çÇ]+$" title="Apenas texto" maxlength = "15">
                                                                      </div>
                                                                      <div class="Form-div">
                                                                           <label for="Gmail">Gmail</label>
                                                                           <input type="email" name="Gmail" id="Gmail" class="InputTexT" maxlength = "50">
                                                                      </div>
                                                                      <div class="Form-div">
                                                                           <label for="Senha">Senha</label>
                                                                           <input required type="password" name="Senha" id="Senha" class="InputTexT" maxlength = "8">
                                                                      </div>
                                                                 </div>  
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="modal-footer">
                                                  <button type="button" class="btn" data-dismiss="modal">Close</button>
                                                  <button type="submit" name="submit" class="btn">Cadastrar</button>
                                             </div>
                                        </form>
                                       
                                   </div>
                              </div>
                               
                              <!-- Button trigger modal Editar Informação -->
                               <button type="button"  class="btn" data-toggle="modal" data-target="#editar_informação">
                                   Editar Informação
                              </button>
          
                              <!-- Modal -->
                              <div class="modal fade" id="editar_informação" tabindex="-1" role="dialog" aria-labelledby="editar_informação" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form action="Perfil Admin.php" method="post" class="modal-content">
                                             <div class="modal-header">
                                                  <h5 class="modal-title" id="editar_informação">Atualizar Informação</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                             </div>
                                             <div class="modal-body">
                                                  <div class="Form-Modal">
                                                  <div class="Form-div">
                                                            <label for="Nome">Nome</label>
                                                            <input type="text" name="Nome_at" id="Nome" class="InputTexT"  pattern="[a-z A-Z áéíóú ÁÉÍÓÚ  ãõ ÃÕ ÂÔ çÇ]+$" title="Apenas texto">
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="modal-footer">
                                                  <button type="reset" class="btn" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn">Salvar</button>
                                             </div>
                                        </form>
                                   </div>
                                  
                              </div>
                         </section>
                    </aside>
                    
                    <aside class="dashbord-aside">
                        
                    </aside>

                    <aside class="dashbord-aside">
                         <section class="dashbord-aside-section"> 
                              <!-- Button trigger modal Alterar Foto-->
                              <button type="button"  class="btn" data-toggle="modal" data-target="#Alterarfoto">
                                   Editar Foto
                              </button>
          
                              <!-- Modal -->
                              <div class="modal fade" id="Alterarfoto" tabindex="-1" role="dialog" aria-labelledby="Alterarfoto" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form action="Perfil Admin.php" style="height: 250px;" class="modal-content" method="POST" enctype="multipart/form-data">
                                             <div class="modal-header">
                                                  <h5 class="modal-title" id="Alterarfoto">Editar foto</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                             </div>
                                             <div class="modal-body">
                                                  <div class="Form-Modal">
                                                       <div class="Form-div">
                                                            <input required type="file" name="foto" id="foto" class="InputTexT">
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="modal-footer">
                                                  <button type="reset" class="btn" data-dismiss="modal">Fechar</button>
                                                  <button type="submit" class="btn">Salvar</button>
                                             </div>
                                        </form>
                                      
                                   </div>
                              </div>
                              
                              <!-- Button trigger modal  Alterar Senha -->
                              <button type="button"  class="btn" data-toggle="modal" data-target="#AlterarSenha">
                                   Alterar Senha
                              </button>
          
                              <!-- Modal -->
                              <div class="modal fade" id="AlterarSenha" tabindex="-1" role="dialog" aria-labelledby="AlterarSenha" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                   <form action="Perfil Admin.php" style="height: 400px;" method="post" class="modal-content">
                                             <div class="modal-header">
                                                  <h5 class="modal-title" id="AlterarSenha">Cadastro</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                             </div>
                                             <div class="modal-body">
                                                  <div class="Form-Modal">
                                                       <div class="Texto-modal">
                                                            Insira a senha na primeira caixa e volte a inserir mesma senha na segunda caixa. 
                                                       </div>
                                                       <div class="Form-div">
                                                            <label for="Senha">Insira</label>
                                                            <input required type="password" name="Senha" id="Senha" class="InputTexT" maxlength = "8">
                                                       </div>
                                                       <div class="Form-div">
                                                            <label for="Senha_2">Confirmar</label>
                                                            <input required type="password" name="Senha_2" id="Senha_2" class="InputTexT" maxlength = "8">
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="modal-footer">
                                                  <button type="reset" class="btn" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn">Salvar</button>
                                             </div>
                                        </form>
                                   </div>
                               
                              </div>

                         </section>
                    </aside>
               </div>
          </section>
     </section>
</body>
</html>