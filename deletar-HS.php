<?php
session_start();




require('conexao.php');
    $CODIGO = $_POST['id'];

    $sql = "delete from USUARIO where CODIGO = '$CODIGO'";
    $resultado = mysqli_query($conexao, $sql, $temp);


if ($resultado) {
    echo "<script> alert('Contato excluido!'); </script>";

}else{
	echo "ERRO!";
    echo $CODIGO;
}


?>

