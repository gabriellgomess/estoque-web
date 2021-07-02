<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: /estoque/index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conn, strtoupper($_POST['usuario']));
$senha = mysqli_real_escape_string($conn, strtoupper($_POST['senha']));

$query = "SELECT * FROM usuarios WHERE email = '$usuario' AND senha = md5('$senha')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: /estoque/saidas.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: /estoque/index.php');
	exit();
}