<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="Gabriel Gomes" content="">

  <title>Estoque WPS Brasil | SUL</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a99ccdd62a.js" crossorigin="anonymous"></script> 
  

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style-login.css">

</head>

<body>

  <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img src="img/logo_wps.png" alt="logotipo WPS"> <h6> CONTROLE DE ESTOQUE</h6></div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <a href="dashboard.html" class="list-group-item list-group-item-action bg-light disabled"><i class="fas fa-chart-bar"></i> Dashboard</a>
        </li>
        <li class="list-group-item">
          <a href="entradas.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sign-in-alt"></i> Entradas</a>
        </li>
        <li class="list-group-item">
          <a href="saidas.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sign-out-alt"></i> Saídas</a>
        </li>
        <li class="list-group-item">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bg-light dropdown-toggle"><i class="fas fa-boxes"></i> Estoque</a>
        <ul style="width: 200px;" class="collapse list-unstyled list-group" id="homeSubmenu">
          <li class="list-group-item">
              <a id="pucrsestoque" href="pucrs.html">PUCRS</a>
          </li>
          <li class="list-group-item">
              <a id="zaffariestoque" href="zaffari.html">Zaffari</a>
          </li>
          <li class="list-group-item">
              <a id="scestoque" href="florianopolis.html">Santa Catarina</a>
          </li>
        </ul>
        </li>
        <li class="list-group-item">
          <a href="relatorio.html" class="list-group-item list-group-item-action bg-light"><i class="fas fa-exchange-alt"></i> Movimentação</a>
            </li>
          </ul>
          </li>
      </ul>
    </div>
    
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Acesso <i class="fas fa-unlock-alt"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="laboratorio.php">Laboratório <i class="fas fa-tools"></i></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Outros
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="incluir.php">Incluir ítem</a>
                <!-- <a class="dropdown-item" href="#">Opção 2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Algo mais</a> -->
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 id="home" class="mt-4">Acesso <i class="fas fa-unlock-alt"></i></h1><br>
        
        
        
        <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
        
            <!-- Icon -->
            <div class="fadeIn first">
              <h1 class="text-success" style="padding: 15px">Login <i class="fas fa-key"></i></h1>
            </div>
        
            <!-- Login Form -->
            <form method="post" action="/estoque/login/login.php">
              <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuário">
              <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha">
              <input type="submit" class="fadeIn fourth" value="Acessar">
            </form>
            <?php
              if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="p-3 mb-2 bg-danger text-white">
              <p>ERRO: Usuário ou senha inválidos.</p>
            </div>
            <?php
              endif;
              unset($_SESSION['nao_autenticado']);
            ?>
            <div id="respostasenha"></div>           
        
            <!-- Remind Passowrd -->
            <div id="formFooter">
              <a id="recuperarsenha" class="underlineHover" href="#">Esqueceu a Senha?</a>
            </div>
        
          </div>
        </div>

        
    </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
   
   <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="http://facebook.com/gabriellgomess1205" target="blank" role="button"><i class="fab fa-facebook-f"></i></a>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/gabriel120583" target="blank" role="button"><i class="fab fa-twitter"></i></a>
      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="http://google.com.br" target="blank" role="button"><i class="fab fa-google"></i></a>
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/gabriellgomess12/" target="blank" role="button"><i class="fab fa-instagram"></i></a>
      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/gabriel-gomes-72310a190/" target="blank" role="button"><i class="fab fa-linkedin-in"></i></a>
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/gabriellgomess" target="blank" role="button"><i class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->
    <!-- Section: Text -->
    <section class="mb-4">
      <h5>Gabriel Gomes <small>DesenvolvedorWEB</small></h5>
      <p>
        Criação de sites personalizados e automatizados, loja virtual e e-commerce, integração com API e consultoria de tecnologia.
      </p>
    </section>    
  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://gabriellgomess.com/">gabriellgomess.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    // ================

    $("#recuperarsenha").click(function(){
      $("#respostasenha").html("Entre em contato com:<br>Gabriel Gomes - (11) 94282-5943 <i class='fab fa-whatsapp'></i>")
    })
  </script>

</body>

</html>
