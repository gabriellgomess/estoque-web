<?php

$peca = $_POST['sai-pecas'];
$quantidade = $_POST['quantidade'];
$sai_destino = $_POST['sai-destino'];
$sai_estoque = $_POST['sai-estoque'];
$desc = $_POST['sai-desc'];
$saida = 'SAIDA';
$data = date('d/m/Y H:i');

function tirarAcentos($desc){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N c C"),$desc);
}
$desc2 = tirarAcentos($desc);

$sai_desc = strtoupper($desc2);

$connect = mysqli_connect('estoquewps.mysql.dbaas.com.br' , 'estoquewps' , 'Estoque123@', 'estoquewps');



if ($sai_estoque == "PUCRS"){

        $verifica = "SELECT quantidade FROM estoque WHERE nome = '$peca'";
        $saldo = mysqli_query($connect, $verifica);
        $row_busca = mysqli_fetch_assoc($saldo);

    if ($row_busca['quantidade'] < $quantidade){

        $resposta = "<p style='color: red'>Não temos a quantidade de ".$peca." suficiente, a quantidade em estoque é ".$row_busca['quantidade'].".</p>";

        mysqli_close($connect);
    }else{
        if(!empty($peca)){

        $sql2 = "INSERT INTO movimentacao (`nome`, `quantidade`, `origem`, `estoque`, `movimento`, `observacao`, `data`) VALUES ('$peca', '$quantidade', '$sai_estoque', '$sai_destino', '$saida', '$sai_desc', '$data')";
        mysqli_query($connect, $sql2);

        $sql = "UPDATE estoque SET `quantidade` = (`quantidade` - '$quantidade') WHERE `nome` = '$peca'";
        mysqli_query($connect, $sql);

            $resposta = "<p style='color: green'>".$peca." retirada (o) do estoque.</p>";

        mysqli_close($connect);
        }
    }
}elseif($sai_estoque == "Zaffari"){

        $verifica = "SELECT quantidade FROM estoque_zaffari WHERE nome = '$peca'";
        $saldo = mysqli_query($connect, $verifica);
        $row_busca = mysqli_fetch_assoc($saldo);
    if ($row_busca['quantidade'] < $quantidade){

        $resposta = "<p style='color: red'>Não temos a quantidade de ".$peca." suficiente, a quantidade em estoque é ".$row_busca['quantidade'].".</p>";

        mysqli_close($connect);
    }else{
        if(!empty($peca)){

        $sql2 = "INSERT INTO movimentacao (`nome`, `quantidade`, `origem`, `estoque`, `movimento`, `observacao`, `data`) VALUES ('$peca', '$quantidade', '$sai_estoque', '$sai_destino', '$saida', '$sai_desc', '$data')";
        mysqli_query($connect, $sql2);

        $sql = "UPDATE estoque_zaffari SET `quantidade` = (`quantidade` - '$quantidade') WHERE `nome` = '$peca'";
        mysqli_query($connect, $sql);

            $resposta = "<p style='color: green'>".$peca." retirada (o) do estoque.</p>";

        mysqli_close($connect);
        }
    }

}elseif($sai_estoque == "Santa Catarina"){

        $verifica = "SELECT quantidade FROM estoque_sc WHERE nome = '$peca'";
        $saldo = mysqli_query($connect, $verifica);
        $row_busca = mysqli_fetch_assoc($saldo);
    if ($row_busca['quantidade'] < $quantidade){

        $resposta = "<p style='color: red'>Não temos a quantidade de ".$peca." suficiente, a quantidade em estoque é ".$row_busca['quantidade'].".</p>";

        mysqli_close($connect);
    }else{
        if(!empty($peca)){

        $sql2 = "INSERT INTO movimentacao (`nome`, `quantidade`, `origem`, `estoque`, `movimento`, `observacao`, `data`) VALUES ('$peca', '$quantidade', '$sai_estoque', '$sai_destino', '$saida', '$sai_desc', '$data')";
        mysqli_query($connect, $sql2);

        $sql = "UPDATE estoque_sc SET `quantidade` = (`quantidade` - '$quantidade') WHERE `nome` = '$peca'";
        mysqli_query($connect, $sql);

            $resposta = "<p style='color: green'>".$peca." retirada (o) do estoque.</p>";

        mysqli_close($connect);
        }
    }

}

echo $resposta;

?>