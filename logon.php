<?php

	session_start();

	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	$conexao = mysqli_connect('localhost', 'root', 'Eus@uacad', 'HEROIS_SOLIDARIOS');
	$query = "SELECT LOGIN_USUARIO, SENHA_USUARIO FROM USUARIO WHERE LOGIN_USUARIO = '$usuario' and SENHA_USUARIO = '$senha'";
	
	$resultado = mysqli_query($conexao, $query);
	if($resultado) {
		$array = mysqli_fetch_array($resultado);
		$_SESSION['login'] = $usuario;
		$_SESSION['senha'] = $senha;
		echo "Login feito com sucesso!";
		header('location: index.php');

	}else{
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		header('location: login.php');
	
	}


?>