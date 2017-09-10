<?php
$conexao = mysqli_connect('127.0.0.1', 'root', 'Eus@uacad', 'HEROIS_SOLIDARIOS')
or die (mysql_error());

$select = "select * from USUARIO";
$bla = mysqli_query($conexao,$select);

$bum = mysqli_fetch_array($bla);
?>