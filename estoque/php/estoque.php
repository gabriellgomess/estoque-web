<?php

$connect = mysqli_connect('estoquewps.mysql.dbaas.com.br' , 'estoquewps' , 'Estoque123@', 'estoquewps');
$sql = "SELECT * FROM estoque ORDER BY nome";
$response = mysqli_query($connect, $sql);

echo "<h1 style='color: white;'>Estoque</h1>";
echo "<div class='table-responsive'>
      <table class='table table-bordered table-hover table-sm'>
        <thead class='thead-dark'>
          <tr>
            <th class='text-primary' colspan='2'>PUCRS</th>
          </tr>
          <tr>
            <th scope='col'>PEÇA</th>
            <th style='text-align: center' scope='col'>QUANTIDADE</th>            
          </tr>
        </thead>";
while ($row_busca = mysqli_fetch_assoc($response)){                                           
          echo utf8_encode( 
            "<tbody>
                <tr>
                  <td>".$row_busca['nome']."</td>
                  <td style='text-align: right'>".$row_busca['quantidade']."</td>                  
                </tr>");
              };
      echo "</tbody>  
      </table>
      </div>
                ";


mysqli_close($connect);
// ====================================================================================


?>