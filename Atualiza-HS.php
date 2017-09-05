<?php
require'banco.php';
require('conexao.php');
session_start();

if (!isset($_SESSION['login'])){
 	header('Location:index.php');
 }



$cod_usuario = $_POST['atualizar'];

$update = atualiza($cod_usuario);
if ($update) {
	echo "<script> alert('Contato alterado com sucesso!'); </script>";
	header("Location: listagem.php");

}else{
	echo "<script> alert('Contato não deletado!'); </script>";

	header("Location: listagem.php");

}

