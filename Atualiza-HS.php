<?php
require'conexao.php';
session_start();

if (!isset($_SESSION['login'])){
 	header('Location:index.php');
 }



$CODIGO = $_POST['id'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$nome = $_POST['nome'];

echo $CODIGO;
echo $login;
echo $senha;
echo $email;
echo $endereco;
echo $nome;


$sql = "UPDATE USUARIO SET SENHA_USUARIO = '$senha', NOMECOMPLETO = '$nome', EMAIL = '$email', ENDERECO = '$endereco', LOGIN_USUARIO = '$login' WHERE CODIGO = $CODIGO; ";
	$query = mysqli_query($conexao, $sql);

if ($query) { 
	echo "<script> alert('Contato alterado com sucesso!'); </script>";
	header("Location: listagem.php");

}else{
	echo "<script> alert('Contato não deletado!'); </script>";

	header("Location: listagem.php");

}

