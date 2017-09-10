<?php


//Formulario POST
$nomeusu = $_POST['nomeusu'];
$nomecom = $_POST['nomecom'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$senha = $_POST['senha'];

require('conexao.php');
$query = "insert into USUARIO (ADMINISTRADOR, LOGIN_USUARIO, NOMECOMPLETO, CPF, ENDERECO, EMAIL, SENHA_USUARIO)
values (0, '$nomeusu','$nomecom','$cpf','$endereco','$email','$senha');";

  $result = mysqli_query($conexao, $query); //Realiza a consulta

    if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo  "<script>alert('Cadastro concluído com sucesso! <br> Tente se logar no sistema!);</script>";
        header("Location: login.php");

    } else {
        echo  "<script>alert('Cadastro não realizado, tente novamente!);</script>";
        header("Location: cadastro.php");
    }

    mysqli_close($conexao); //fecha conexão com banco de dados
?>
