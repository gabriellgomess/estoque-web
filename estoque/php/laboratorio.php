<?php 

$peca = $_POST['ent-pecas'];
$dono = $_POST['dono'];
$laboratorio = $_POST['laboratorio'];
$string = strtoupper($_POST['descricao']);

function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N c C"),$string);
}
$nome = tirarAcentos($string);

$descricao = strtoupper($nome);


$envio = date('d/m/Y H:i');
$previsao = date('d/m/Y H:i', strtotime('+60 days'));

$connect = mysqli_connect('estoquewps.mysql.dbaas.com.br' , 'estoquewps' , 'Estoque123@', 'estoquewps');

$sql = "INSERT INTO laboratorio (`peca`, `laboratorio`, `observacoes`, `cliente`, `entrada`, `previsao`) VALUES ('$peca', '$laboratorio', '$descricao', '$dono', '$envio', '$previsao')";
mysqli_query($connect, $sql);


mysqli_close($connect);




?>