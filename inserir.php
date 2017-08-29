<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $conexao = mysqli_connect('10.31.30.92', 'root', '@luno1fpe','HEROIS_SOLIDARIOS');


    if (!conexao){
        die("ERROR: " . mysqli_connect_error());
    }

    $query = "insert into CONTATE_NOS (NOME, EMAIL, ASSUNTO, MENSAGEM) values ('{$nome}','{$email}','{$assunto}','{$mensagem}');";

    $resultado = mysqli_query($conexao,$query);


    if ($resultado){
    	echo "<p>Cadastro feito com sucesso</p>";
            echo '<a href="contatos.html">Voltar para contate nos</a>';
    }else {
    	echo "<h1> DEU ERRO !! </h1>";
    }
?>
