<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Área Restrita</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="../_css/empresa.css">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
    <div class="navbar-header">
        <a href="#" class="navbar-brand" id="dho">DHO<p id="rh">RH</p></a>
        <p id="slogan">desenvolvimento humano e organizacional</p>
      </div>      
      <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a id="list" class="nav-link" href="../index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item text">
            <a id="list" class="nav-link" href="../vagas.php">Vagas</a>
          </li>
          <li class="nav-item">
          <a id="list" class="nav-link" href="../empresa.php">Cadastrar</a>
          </li>
          <li class="nav-item">
          <a id="list" class="nav-link" href="../formulario.php">Contato</a>
          </li>
          <li class="nav-item active">
          <a id="list" class="nav-link" href="login-php/index.php">Administrador</a>
          </li>          
        </ul>
      </div>
    </div>
  </nav>

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Area Restrita</h3>
                    
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-5">
    <div id="rodape" class="container text-center">
           <a href="http://gabriellgomess.com" target="_blank" style="text-decoration: none"><p id="desenvolvedor" class="m-0 text-center">Gabriel Gomes | Desenvolvedor WEB</p></a>
           <a href="https://www.facebook.com/profile.php?id=100037210486801" target="_blank"><i id="fac" class="fa fa-facebook fa-2x"></i></a>
           <a href="https://www.instagram.com/gabriellgomess12/" target="_blank"><i id="ins" class="fa fa-instagram fa-2x"></i></a>
           <a href="https://github.com/gabriellgomess" target="_blank"><i id="git" class="fa fa-github fa-2x"></i></a>
           <a href="https://bit.ly/31bxD8o" target="_blank"><i id="wha" class="fa fa-whatsapp fa-2x"></i></a>         
    </div>   
  </footer>      
    <!-- --------------------------------------------------------------------------------------- -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>