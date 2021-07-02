<?php

$string = strtoupper($_POST['incluir-peca']);

function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N c C"),$string);
}
$nome = tirarAcentos($string);

$peca = strtoupper($nome);

$connect = mysqli_connect('estoquewps.mysql.dbaas.com.br' , 'estoquewps' , 'Estoque123@', 'estoquewps');


$sql = "INSERT INTO inventario (`peca`,`data`) VALUES ('$peca', now())";
mysqli_query($connect, $sql);



$sql2 = "INSERT INTO estoque (`nome`,`quantidade`) VALUES ('$peca', '0')";
mysqli_query($connect, $sql2);

$sql3 = "INSERT INTO estoque_zaffari (`nome`,`quantidade`) VALUES ('$peca', '0')";
mysqli_query($connect, $sql3);

$sql4 = "INSERT INTO estoque_sc (`nome`,`quantidade`) VALUES ('$peca', '0')";
mysqli_query($connect, $sql4);




mysqli_close($connect);      

        

?>