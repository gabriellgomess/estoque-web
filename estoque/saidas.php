<?php
session_start();
include "login/verifica_login.php";
include "php/select.php"; 
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

  <!-- CHOSER -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
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
            <a class="nav-link" href="/estoque/login/logout.php">Sair <i class="fas fa-door-open"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laboratorio.php">Laboratório <i class="fas fa-tools"></i></a>
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
        <h1 class="mt-4 text-danger">Saídas <i class="fas fa-sign-out-alt"></i></h1>
        <form id="form_saida" action="" method="post">     
          <div class="form-group">            
            <div class="row">
              <div class="col-sm-4 col-md-4 col-lg-4">
                <label for="sai-pecas">Peça</label>           
                <select class="form-control select2" name="sai-pecas" id="sai-pecas" style="width: 100%;">
                  <option value="">Selecione</option>
                  <<?php while($prod = mysqli_fetch_assoc($response)){?>
                    <option value="<?php echo utf8_encode( $prod['peca'] )?>" name="sai-pecas"><?php echo utf8_encode( $prod['peca'] )?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2">
                <label for="sai-pc-qtd">Quantidade</label>           
                <input type="number" class="form-control form-control-sm" min="1" step="1" name="quantidade" id="quantidade" placeholder="Quantidade">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-3 col-md-3 col-lg-3">
                <label for="sai-destino">Destino</label>           
                <select class="form-control select2" name="sai-destino" id="sai-destino" style="width: 100%;">
                  <option value="">Selecione</option>                              
                <optgroup label="Técnicos">                
                  <option value="">Selecione</option>
                  <option value="Allan Silva">Allan Silva</option>  
                  <option value="Anderson Domingues">Anderson Domingues</option>  
                  <option value="Clayton Cherutti">Clayton Cherutti</option>  
                  <option value="Cristiano Rost">Cristiano Rost</option>  
                  <option value="Gabriel Gomes">Gabriel Gomes</option>  
                  <option value="Jose Benetti">José Benetti</option>  
                  <option value="Matheus Silva">Matheus Silva</option>  
                  <option value="Richard Magalhaes">Richard Magalhães</option>  
                  <option value="Robson Antunes">Robson Antunes</option>                
                  <option value="Ajuste de Estoque">Ajuste de Estoque</option> 
                </optgroup>                    
                </select>
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3">
                <label for="sai-estoque">Estoque</label>           
                <select class="form-control select2" name="sai-estoque" id="sai-estoque" style="width: 100%;" required>
                  <option value="">Selecione</option>
                  <option value="PUCRS">PUCRS</option>
                  <option value="Zaffari">Zaffari</option>
                  <option value="Santa Catarina">Sta Catarina</option>                                  
                </select>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-6 col-md-6 col-lg-6">
                <label for="sai-desc">Descrição</label>           
                <textarea type="text" class="form-control" name="sai-desc" id="sai-desc" style="resize: none;" cols="30" rows="3" placeholder="Descreva de forma resumida qual o destino da peça, de preferência com o número do chamado."></textarea>
              </div>
            </div>              
            </div>
            <input name="" id="" class="btn btn-primary mt-2" type="submit" value="Retirar">
          </div>
        </form>
        <div id="loaded"></div>
        <div id="saldo"></div>
        
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
<!-- /Footer -->
  <!-- AJAX -->
  <script>
    $(document).ready(function() {
  var iconCarregando = $('<span class="destaque">Carregando. Por favor aguarde...</span>');
  $('#form_saida').submit(function(e) {
      e.preventDefault();
      var serializeDados = $('#form_saida').serialize();
        
      $.ajax({
          url: '/estoque/php/saida.php',
          dataType: 'html',
          type: 'POST',
          data: serializeDados,
          beforeSend: function() {
              $('#loaded').html(iconCarregando); 
          },
          complete: function(data) {
            $('#form_saida')[0].reset();
            $('#loaded').html();           
          },
          success: function(data) {
            $('#form_saida')[0].reset();
            $('#loaded').html(data);             
          },
          error: function(xhr,er) {
              $('#loaded').html('<p class="destaque">Error ' + xhr.status + ' - ' + xhr.statusText + '<br />Tipo de erro: ' + er + '</p>');
          },
          
      });     
        
  });
})
  </script>
  <script>
    $(document).ready(function() {
      $('.select2').select2();
      theme: "classic";
    });
  </script>
  <!-- /AJAX --> 
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
