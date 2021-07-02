<?php 

$connect = mysqli_connect('estoquewps.mysql.dbaas.com.br' , 'estoquewps' , 'Estoque123@', 'estoquewps');
$sql = "SELECT * FROM inventario ORDER BY peca";
$response = mysqli_query($connect, $sql);


mysqli_close($connect);

?>