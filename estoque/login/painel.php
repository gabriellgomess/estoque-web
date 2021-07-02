<?php
session_start();
include('verifica_login.php');
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Gerenciamento de vagas</title>
    <style>
        
        #pub{
            width: 100px;
        }       
        #del{
            width: 100px;
        }
        #entrada, #saida{
            margin-top: 30px;
        }
        nav{
            background-color: #4d80e4;
        }
        table{
            font-size: 12px;
        }   
    </style>    
</head>
<body>
<nav class="navbar navbar-dark">
    <h5>Olá, <?php echo $_SESSION['usuario'];?></h5>

    <h4>VAGAS EM APROVAÇÃO</h4>
    
    <form action="painel.php" method=POST>
        <div id="entrada" class="input-group mb-3">    
            <input id="pub" name="pub" type="text" class="form-control" placeholder="ID da vaga" aria-label="ID da vaga" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button class="btn btn-success" type="submit">Publicar</button>
            </div>    
        </div>
    </form>
    <form action="../_php/deletar.php" method=POST onsubmit="return confirm('Você deseja deletar essa vaga?')">
        <div id="saida" class="input-group mb-3">    
            <input id="del" name="del" type="text" class="form-control" placeholder="ID da vaga" aria-label="ID da vaga" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button class="btn btn-warning" type="submit">Deletar</button>
            </div>    
        </div>
    </form>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Selecione
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="ativas.php">Vagas ativas</a>
    <a class="dropdown-item" href="#">Publicar Matérias</a>
    <a class="dropdown-item" href="contatos.php">Contato</a>    
  </div>
  </div>
    <a href="logout.php"><button class="btn btn-danger">Sair</button></a>    
</nav>

<?php
    $id = $_POST['pub'];
    $connect = mysqli_connect('mysharedhost0175','cadastro_db','Isadopai12345@','cadastro_db') or die ('Erro ao Conectar');
    $sql = utf8_decode("INSERT INTO vagas_anuncio (`empresa`, `cargo`, `area`, `salario`,`beneficios`,`requisitos`,`funcao`,`cidade`,`estado`,`email`, `criacao`) SELECT `empresa`, `cargo`, `area`, `salario`,`beneficios`,`requisitos`,`funcao`,`cidade`,`estado`,`email`, now() FROM vagas WHERE id = '$id'");
    $sql2 = "DELETE FROM vagas WHERE id = '$id'";
    mysqli_query($connect, $sql) or die (print_r($connect));
    mysqli_query($connect, $sql2) or die (print_r($connect));
    mysqli_close($connect);
    // echo "Vagas publicadas com sucesso!<br><br>";
    // echo "<a href='../login-php/painel.php'><button>VOLTAR</button>";
?>
   

    <?php
        // header('Content-Type: text/html; charset=utf-8');
       $connect = mysqli_connect('mysharedhost0175','cadastro_db','Isadopai12345@','cadastro_db') or die ('Erro ao Conectar');
    //    mysqli_set_charset($connect,"utf8");
                   
       $sql = "SELECT `id`, `empresa`, `cargo`, `area`, `salario`,`beneficios`,`requisitos`,`funcao`,`cidade`,`estado`,`email`,`nome`,`fone`,`criacao` FROM `vagas` ORDER BY id DESC";                 
       $result = mysqli_query($connect, $sql) or die ("Erro ao buscar registro!");
      
                    while ($row = mysqli_fetch_row($result)) {
                                        echo (  "<table class='table table-striped'>
                                                    <thead>
                                                    <tr>
                                                        
                                                        <th scope='col' style='width:30px'>ID</th>
                                                        <th scope='col' style='width:100px'>EMPRESA</th>
                                                        <th scope='col' style='width:100px'>CARGO</th>
                                                        <th scope='col' style='width:100px'>AREA</th>
                                                        <th scope='col' style='width:100px'>SALARIO</th>
                                                        <th scope='col' style='width:100px'>BENEFICIOS</th>
                                                        <th scope='col' style='width:100px'>REQUISITOS</th>
                                                        <th scope='col' style='width:100px'>FUNÇÃO</th>
                                                        <th scope='col' style='width:100px'>CIDADE</th>
                                                        <th scope='col' style='width:100px'>ESTADO</th>
                                                        <th scope='col' style='width:100px'>E-MAIL</th>
                                                        <th scope='col'style='width:100px'>NOME</th>
                                                        <th scope='col' style='width:100px'>TELEFONE</th>
                                                        <th scope='col' style='width:100px'>DATA</th>                                                        
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        
                                                        <td style='height: 50px; width:30px'><b>$row[0]</b></td>
                                                        <td style='height: 50px; width:100px'>$row[1]</td>
                                                        <td style='height: 50px; width:100px'>$row[2]</td>
                                                        <td style='height: 50px; width:100px'>$row[3]</td>
                                                        <td style='height: 50px; width:100px'>$row[4]</td>
                                                        <td style='height: 50px; width:100px'>$row[5]</td>
                                                        <td style='height: 50px; width:100px'>$row[6]</td>
                                                        <td style='height: 50px; width:100px'>$row[7]</td>
                                                        <td style='height: 50px; width:100px'>$row[8]</td>
                                                        <td style='height: 50px; width:100px'>$row[9]</td>
                                                        <td style='height: 50px; width:100px'>$row[10]</td>
                                                        <td style='height: 50px; width:100px'>$row[11]</td>
                                                        <td style='height: 50px; width:100px'>$row[12]</td>
                                                        <td style='height: 50px; width:100px'>$row[13]</td>                                                        
                                                    </tr>
                                                    </tbody>
                                                </table>");
                                                                                    
                                                          };
      ?>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</body>
</html>







