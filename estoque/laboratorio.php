<?php
session_start();
include "login/verifica_login.php";
include "php/select.php" 
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
    
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

      <!-- DATATABLES -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>      
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

      <!-- CHOSER -->
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      
      <script>
        $(document).ready(function() {
            $('#listar-estoque').DataTable( {
              "ajax":{
                  "url": "/estoque/php/statuslab.php",
                  "dataSrc":""
              },
              "columns":[
                  {"data": "id"},
                  {"data": "peca"},
                  {"data": "laboratorio"},
                  {"data": "cliente"},
                  {"data": "observacoes"},
                  {"data": "entrada"},
                  {"data": "previsao"}
              ],
              "language": {
              "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }
            });
            $.fn.dataTable.ext.errMode = 'none';
        });       
       
      </script>

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
            <li class="nav-item">
            <a class="nav-link" href="/estoque/login/logout.php">Sair <i class="fas fa-door-open"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="laboratorio.php">Laboratório <i class="fas fa-tools"></i><span class="sr-only">(current)</span></a>
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
        <h1 class="mt-4">Laboratório <i class="fas fa-tools"></i></i></h1>
        <hr>
        <div class="col-sm-10 col-md-10 col-lg-10">
          <p>Cadastre aqui as peças que estão entrando em conserto, nos laboratórios de Porto Alegre, São Paulo ou de terceiros.</p>
          <p>Informe a peça que está entrando em conserto, o dono, a laboratório para o qual está indo e caso o dono seja "Cliente", no campo Observações informe quem é o cliente.</p>
        </div>
        <hr>    
        <form id="form_entrada" action="" method="post">     
          <div class="form-group">            
            <div class="row">
              <div id="sel-pecas" class="col-sm-4 col-md-4 col-lg-4">
                <label for="ent-pecas">Peça</label>           
                <select class="form-control select2" name="ent-pecas" id="ent-pecas" style="width: 100%;" required>
                  <option value="">Selecione</option>
                  <?php while($prod = mysqli_fetch_assoc($response)){?>
                  <option value="<?php echo utf8_encode( $prod['peca'] )?>" name="ent-pecas"><?php echo utf8_encode( $prod['peca'] )?></option>
                  <?php } ?>                 
                </select>
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3">
            <label for="dono">Dono</label>
              <select class="form-control select2" name="dono" id="dono" style="width: 100%;" required>
                <option value="">Selecione</option>
                <option value="PUCRS">PUCRS</option>
                <option value="Zaffari">Zaffari</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="Cliente">Cliente</option>
              </select>
            </div>
              <div class="col-sm-3 col-md-3 col-lg-3">
                <label for="ent-origem">Laboratório</label>           
                <select class="form-control select2" name="laboratorio" id="laboratorio" style="width: 100%;" required>
                  <option value="">Selecione</option>
                  <option value="Sao Paulo">São Paulo</option>
                  <option value="Porto Alegre">Porto Alegre</option>
                  <option value="Terceiros">Terceiros</option>                 
                </select>
              </div>              
            </div>
            <div class="row">
              <div class="col-sm-10 col-md-10 col-lg-10">
                <label for="ent-origem">Observações</label>           
                <textarea style="resize: none" name="descricao" id="descricao" cols="30" rows="4" class="form-control" placeholder="Breve descrição aqui. Em caso de peça enviada à terceiros, descrever o local e o contato." required></textarea>
              </div>
            </div>           
            <input name="" id="" class="btn btn-primary mt-2" type="submit" value="Cadastrar">
          </div>
        </form>
        <div style="height: 30px" id="loaded">

        </div>
        <hr>
        <form id="remove-lab" action="" method="post">
          <div class="row">
            <div class="col-sm-10 col-md-10 col-lg-10">
              <p>Escolha na tabela abaixo a peça que está retornando de conserto, através do seu ID dê entrada em um estoque ou devolva ao cliente proprietário.</p>
            </div>
          </div>
          <div class="row">            
            <div class="col-sm-2 col-md-2 col-lg-2">
            <label for="ident">ID</label>
              <input id="ident" name="ident" type="number" class="form-control form-control-sm" required>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
            <label for="estoque">Estoque</label>
              <select class="form-control select2" name="estoque" id="estoque" style="width: 100%;" required>
              <option value="">Selecione</option>
                <option value="PUCRS">PUCRS</option>
                <option value="Zaffari">Zaffari</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="Cliente">Cliente</option>
              </select>
            </div>                     
          </div>
          <div class="row">
            <div id="resp-del" class="col-6"></div> 
          </div>
          <button class="btn btn-warning mt-2" type="submit">Retorno</button>
        </form>
        <hr>
        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-end">
          <!-- <button id='atualiza' class='btn btn-success m-2'>Atualizar</button>            -->
        </div>
               
        <div id="tabela">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">         
            <div id="pucrs" class="table-responsive">           
              <table id="listar-estoque" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>PEÇA</th>
                    <th>LABORATÓRIO</th>                 
                    <th>DONO</th> 
                    <th>OBSERVAÇÕES</th> 
                    <th>ENTRADA</th> 
                    <th>PREVISÃO</th> 
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>PEÇA</th>
                    <th>LABORATÓRIO</th>                 
                    <th>DONO</th> 
                    <th>OBSERVAÇÕES</th> 
                    <th>ENTRADA</th> 
                    <th>PREVISÃO</th>                  
                  </tr>
                </tfoot>
              </table>            
            </div>
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
<!-- /Footer -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>

    $(document).ready(function() {
  var iconCarregando = $('<span class="destaque">Carregando. Por favor aguarde...</span>');
  $('#form_entrada').submit(function(e) {
      e.preventDefault();
      var serializeDados = $('#form_entrada').serialize();
        
      $.ajax({
          url: '/estoque/php/laboratorio.php',
          dataType: 'html',
          type: 'POST',
          data: serializeDados,
          beforeSend: function() {
              $('#loaded').html(iconCarregando); 
          },
          complete: function() {
            $('#loaded').html('Peças enviadas para conserto'); 
          },
          success: function(data, textStatus) {
            $('#form_entrada')[0].reset();  
          },
          error: function(xhr,er) {
              $('#loaded').html('<p class="destaque">Error ' + xhr.status + ' - ' + xhr.statusText + '<br />Tipo de erro: ' + er + '</p>');
          },
          
      });     
        
  });
});
</script>

  <script>
    $(document).ready(function() {
      $('.select2').select2();
      theme: "classic";
    });
  </script>

  <script>

$(document).ready(function() {
var iconCarregando = $('<span class="destaque">Carregando. Por favor aguarde...</span>');
$('#remove-lab').submit(function(e) {
  e.preventDefault();
  var serializeDados = $('#remove-lab').serialize();
    
  $.ajax({
      url: '/estoque/php/retornolab.php',
      dataType: 'html',
      type: 'POST',
      data: serializeDados,
      beforeSend: function() {
        $('#resp-del').html(iconCarregando); 
      },
      complete: function() {
        $('#resp-del').html('Peça retirada do laboratório'); 
      },
      success: function(data, textStatus) {
        $('#remove-lab')[0].reset();  
      },
      error: function(xhr,er) {
          $('#resp-del').html('<p class="destaque">Error ' + xhr.status + ' - ' + xhr.statusText + '<br />Tipo de erro: ' + er + '</p>');
      },
      
  });     
    
});
});
</script>
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
