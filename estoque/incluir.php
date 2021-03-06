<?php 
session_start();
include "login/verifica_login.php";
?>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

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
          <a href="saidas.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sign-out-alt"></i> Sa??das</a>
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
          <a href="relatorio.html" class="list-group-item list-group-item-action bg-light"><i class="fas fa-exchange-alt"></i> Movimenta????o</a>
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
            <a class="nav-link" href="/estoque/login/logout.php">Sair <i class="fas fa-door-open"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laboratorio.php">Laborat??rio <i class="fas fa-tools"></i></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Outros
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="incluir.php">Incluir ??tem</a>
                <!-- <a class="dropdown-item" href="#">Op????o 2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Algo mais</a> -->
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4 text-warning">Incluir ??tem <i class="fas fa-arrow-circle-down"></i></h1>
        <form id="incluir" action="" method="post">     
          <div class="form-group">            
            <div class="row">
              <div class="col-sm-8 col-md-8 col-lg-8">
                <label for="incluir-peca">Nome do ??tem</label>           
                <input id="incluir-peca" name="incluir-peca" type="text" class="form-control">
              </div>              
            </div>
            <input name="" id="" class="btn btn-primary mt-2" type="submit" value="Incluir">
          </div>
        </form>
        <div class="col-sm-8 col-md-8 col-lg-8">
            <p>Antes de incluir algum ??tem, certifique-se de que j?? n??o exista este ??tem na lista do estoque, evitando assim, cadastro em duplicidade</p>
            <p>Cadastre o ??tem usando nome t??cnico, de forma que todos conhe??am.</p>
            <p>Esta inclus??o apenas informa ao sistema a exist??ncia deste ??tem, n??o exclui a necessidade de dar entrada atrav??s da guia <a href="entradas.html">Entradas</a></p>
        </div>
        <div id="loaded"></div>
        
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
          Cria????o de sites personalizados e automatizados, loja virtual e e-commerce, integra????o com API e consultoria de tecnologia.
        </p>
      </section>    
    </div>
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      ?? 2020 Copyright:
      <a class="text-white" href="https://gabriellgomess.com/">gabriellgomess.com</a>
    </div>
    <!-- Copyright -->
  </footer>
<!-- /Footer -->
  <!-- AJAX -->
  <script>
    $(document).ready(function() {
      var iconCarregando = $('<span class="destaque">Carregando. Por favor aguarde...</span>');
      $('#incluir').submit(function(e) {
          e.preventDefault();
          var serializeDados = $('#incluir').serialize();
            
          $.ajax({
              url: '/estoque/php/incluir.php',
              dataType: 'html',
              type: 'POST',
              data: serializeDados,
              beforeSend: function() {
                  $('#loaded').html(iconCarregando); 
              },
              complete: function(data) {
                $('#loaded').html();           
              },
              success: function(data) {
                $('#incluir')[0].reset();
                $('#loaded').html(data);             
              },
              error: function(xhr,er) {
                  $('#loaded').html('<p class="destaque">Error ' + xhr.status + ' - ' + xhr.statusText + '<br />Tipo de erro: ' + er + '</p>');
              },
              
          });     
            
      });
    })
  </script>
  <!-- /AJAX -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>      
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>