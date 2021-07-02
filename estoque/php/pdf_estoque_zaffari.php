<?php

$connect = mysqli_connect('estoquewps.mysql.dbaas.com.br' , 'estoquewps' , 'Estoque123@', 'estoquewps');
$sql = "SELECT * FROM estoque_zaffari ORDER BY nome";
$response = mysqli_query($connect, $sql);

$data = date('d/m/Y H:i');

echo "<div>
        <h1 style='font-family: Trebuchet MS, sans-serif'>Controle de Estoque</h1>
        <p style='font-family: Trebuchet MS, sans-serif'>Impresso em: ".$data."</p>
      <table style='width: 100%; margin-top: 30px;'>
        <thead style='border: 1px solid black;'>
          <tr'>
            <th colspan='2'><h4 style='font-family: Trebuchet MS, sans-serif'>ESTOQUE ZAFFARI</h4></th>
          </tr>
          <tr>
            <th style='font-family: Trebuchet MS, sans-serif'>PEÇA</th>
            <th style='font-family: Trebuchet MS, sans-serif'>QUANTIDADE</th>            
          </tr>
        </thead>";
while ($row_busca = mysqli_fetch_assoc($response)){                                           
          echo utf8_encode( 
            "<tbody>
                <tr style='border-bottom: 1px solid grey'>
                  <td style='font-family: Trebuchet MS, sans-serif; border-bottom: 1px solid grey'>".$row_busca['nome']."</td>
                  <td style='text-align: center; font-family: Trebuchet MS, sans-serif; border-bottom: 1px solid grey;'>".$row_busca['quantidade']."</td>                  
                </tr>");
              };
      echo "</tbody>  
      </table>
      </div>
                ";


mysqli_close($connect);
// ====================================================================================


?>