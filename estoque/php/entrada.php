<?php

// include "conexao.php";

$peca = $_POST['ent-pecas'];
$quantidade = $_POST['quantidade'];
$ent_origem = $_POST['ent-origem'];
$ent_destino = $_POST['ent-destino'];
$desc = $_POST['ent-desc'];
$ent_quem = "Incluso por: ".$_POST['ent-quem'].". ";
$entrada = 'ENTRADA';
$data = date('d/m/Y H:i');
$connect = mysqli_connect('estoquewps.mysql.dbaas.com.br' , 'estoquewps' , 'Estoque123@', 'estoquewps');

function tirarAcentos($desc){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N c C"),$desc);
}
$desc2 = tirarAcentos($desc);

$descricao = strtoupper($desc2);

if ($ent_destino == "PUCRS"){
    if (!empty($peca)){

        $sql = "UPDATE estoque SET `quantidade` = (`quantidade` + '$quantidade') WHERE `nome` = '$peca'";
        mysqli_query($connect, $sql);

        $sql2 = "INSERT INTO movimentacao (`nome`, `quantidade`, `origem`, `estoque`, `movimento`, `observacao`, `data`) VALUES ('$peca', '$quantidade', '$ent_origem', '$ent_destino', '$entrada','$ent_quem $descricao', '$data')";
        mysqli_query($connect, $sql2);

        $resposta = "<p style='color: green; background: #d2e78d; border: 1px solid green >".$peca." inserida (o) do estoque.</p>";

        mysqli_close($connect);
    }
}elseif ($ent_destino == "Zaffari"){
    if (!empty($peca)){

        $sql = "UPDATE estoque_zaffari SET `quantidade` = (`quantidade` + '$quantidade') WHERE `nome` = '$peca'";
        mysqli_query($connect, $sql);

        $sql2 = "INSERT INTO movimentacao (`nome`, `quantidade`, `origem`, `estoque`, `movimento`, `observacao`, `data`) VALUES ('$peca', '$quantidade', '$ent_origem', '$ent_destino', '$entrada','$ent_quem $descricao', '$data')";
        mysqli_query($connect, $sql2);

        $resposta = "<p style='color: green; background: #d2e78d; border: 1px solid green >".$peca." inserida (o) do estoque.</p>";

        mysqli_close($connect);
    }

}elseif ($ent_destino == "Santa Catarina"){
    if (!empty($peca)){

        $sql = "UPDATE estoque_sc SET `quantidade` = (`quantidade` + '$quantidade') WHERE `nome` = '$peca'";
        mysqli_query($connect, $sql);

        $sql2 = "INSERT INTO movimentacao (`nome`, `quantidade`, `origem`, `estoque`, `movimento`, `observacao`, `data`) VALUES ('$peca', '$quantidade', '$ent_origem', '$ent_destino', '$entrada','$ent_quem $descricao', '$data')";
        mysqli_query($connect, $sql2);

        $resposta = "<p style='color: green; background: #d2e78d; border: 1px solid green >".$peca." inserida (o) do estoque.</p>";

        mysqli_close($connect);
    }

}

echo $resposta;
   

        

?>