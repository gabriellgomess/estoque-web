<?php

$id = $_POST['ident'];
$estoque = $_POST['estoque'];

$connect = mysqli_connect('estoquewps.mysql.dbaas.com.br' , 'estoquewps' , 'Estoque123@', 'estoquewps');

$sql_sel = "SELECT * FROM `laboratorio` WHERE `id` = '$id'";
$query_sel = mysqli_query($connect, $sql_sel);
$row = mysqli_fetch_assoc($query_sel);
$peca = $row['peca'];
$laboratorio = $row['laboratorio'];

if ($estoque == 'PUCRS'){

    $sql_up = "UPDATE estoque SET `quantidade` = (`quantidade` + 1) WHERE `nome` = '$peca'";
    mysqli_query($connect, $sql_up);

    $sql_in = "INSERT INTO movimentacao (`nome`, `quantidade`, `origem`, `estoque`, `movimento`, `data`) VALUES ('$peca', '1', 'Retorno Lab. $laboratorio', 'PUCRS', 'ENTRADA', now())";
    mysqli_query($connect, $sql_in);

    $sql_del = "DELETE FROM `laboratorio` WHERE `id` = $id";
    mysqli_query($connect, $sql_del);    
    
    mysqli_close($connect);

}elseif($estoque == 'Zaffari'){

    $sql_up = "UPDATE estoque_zaffari SET `quantidade` = (`quantidade` + 1) WHERE `nome` = '$peca'";
    mysqli_query($connect, $sql_up);

    $sql_in = "INSERT INTO movimentacao (`nome`, `quantidade`, `origem`, `estoque`, `movimento`, `data`) VALUES ('$peca', '1', 'Retorno Lab. $laboratorio', 'Zaffari', 'ENTRADA', now())";
    mysqli_query($connect, $sql_in);

    $sql_del = "DELETE FROM `laboratorio` WHERE `id` = $id";
    mysqli_query($connect, $sql_del);    
    
    mysqli_close($connect);

}elseif($estoque == 'Santa Catarina'){

    $sql_up = "UPDATE estoque_sc SET `quantidade` = (`quantidade` + 1) WHERE `nome` = '$peca'";
    mysqli_query($connect, $sql_up);

    $sql_in = "INSERT INTO movimentacao (`nome`, `quantidade`, `origem`, `estoque`, `movimento`, `data`) VALUES ('$peca', '1', 'Retorno Lab. $laboratorio', 'Santa Catarina', 'ENTRADA', now())";
    mysqli_query($connect, $sql_in);

    $sql_del = "DELETE FROM `laboratorio` WHERE `id` = $id";
    mysqli_query($connect, $sql_del);    
    
    mysqli_close($connect);

}else{
    $sql_in = "INSERT INTO movimentacao (`nome`, `quantidade`, `origem`, `estoque`, `movimento`, `data`) VALUES ('$peca', '1', 'Retorno Lab. $laboratorio', 'Cliente Avulso', 'ENTRADA', now())";
    mysqli_query($connect, $sql_in);

    $sql_cli = "DELETE FROM `laboratorio` WHERE `id` = $id";
    mysqli_query($connect, $sql_cli);

    mysqli_close($connect);
}



?>