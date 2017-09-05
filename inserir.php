<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    require('conexao.php');


    if (!conexao){
        die("ERROR: " . mysqli_connect_error());
    }

    $query = "insert into CONTATE_NOS (NOME, EMAIL, ASSUNTO, MENSAGEM) values ('{$nome}','{$email}','{$assunto}','{$mensagem}');";

    $resultado = mysqli_query($conexao,$query);


    if ($resultado){
    	echo "<p>Cadastro feito com sucesso</p>";
            echo '<a href="contatos.php">Voltar para contate nos</a>';
    }else {
    	echo "<h1> DEU ERRO !! </h1>";
    }
?>
