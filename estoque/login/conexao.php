<?php
	// $servidor = "j_curriculos.mysql.dbaas.com.br";
	// $usuario = "j_curriculos";
	// $senha = "jacenir123@";
	// $dbname = "j_curriculos";
	
	//Criar a conexao
	$conn = mysqli_connect('estoquewps.mysql.dbaas.com.br' , 'estoquewps' , 'Estoque123@', 'estoquewps');
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>