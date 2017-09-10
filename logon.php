<?php

	session_start();

	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	require('conexao.php');
	$query = "SELECT CODIGO, LOGIN_USUARIO, SENHA_USUARIO FROM USUARIO WHERE LOGIN_USUARIO = '$usuario' and SENHA_USUARIO = '$senha'";

	$resultado = mysqli_query($conexao, $query);
	if($resultado) {
		$array = mysqli_fetch_array($resultado);
		$_SESSION['id']= $array["CODIGO"];
		$_SESSION['login'] = $usuario;
		if ($array["ADMINISTRADOR"] == 1) {
			$_SESSION['administrador'] = true;
		}

		echo $_SESSION['id'];
		echo "<script> alert('Login feito com sucesso!'; </script>";
		header('location: index.php');

	}else{
		unset ($_SESSION['login']);

		header('location: login.php');

	}


?>