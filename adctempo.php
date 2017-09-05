<?php
session_start();
require('conexao.php');
$idvisita = $_POST["id"];

$query = "insert into TEMP_USU(COD_USUARIO, COD_VISITA) values ('".$_SESSION['id']."' , '".$idvisita."');";
$visita = "select COD_VISITA from TEMP_USU";
$resultado = mysqli_query($conexao, $visita);
while ($res = mysqli_fetch_array($resultado)) {
    $codigos = $res['COD_VISITA'];

//if ($idvisita == $codigos){
    //echo "<p><h1>Você já está resgitrado nesta visita!</h1></p>";
   // echo '<a href="Visitas.php"><p>Voltar para a página de visitas</p></a>';
//}
}
  $result = mysqli_query($conexao, $query);//Realiza a consulta

    if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Cadastro feito com sucesso</p>";
        echo '<a href="Visitas.php">Voltar para a página de visitas</a>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "<p>Você já está cadastrado nessa visita!</p>";
        echo '<a href="Visitas.php">Voltar para a página de visitas</a>';
    }

    mysqli_close($conexao); //fecha conexão com banco de dados
 ?>