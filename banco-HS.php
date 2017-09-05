<?php




function deletarContato($CODIGO){
            require('conexao.php');
	$sql = "DELETE FROM USUARIO WHERE CODIGO = '$CODIGO'";
	$query = mysqli_query($conexao, $sql);
	die();
}

function atualiza($nome, $newnome, $cpf, $endereco, $email){
	$sql = "UPDATE clientes SET cpf = '$cpf', nome = '$newnome', email = '$email', endereco = '$endereco' WHERE nome = $nome; ";
	$query = mysqli_query($conexao, $sql);
	die();
}



?>