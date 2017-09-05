<?php
session_start();
$nome = $_SESSION['login'];
if (!$_SESSION ['login']){
    header('location:listagem.php');
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
 require('conexao.php');
  $codigo = $_POST['id'];

  $query = "select * from USUARIO where CODIGO ='$codigo'";

  $resultado = mysqli_query($conexao, $query);
  while ($registro = mysqli_fetch_array($resultado)){
    ?>

<form action="alterar.php" method="POST">
    <fieldset><legend>Tela de Atualização</legend>
    <LABEL><?=  $nome. " Altere Seus Dados" ?></LABEL>
    <input type="hidden" name="id" value="<?=$codigo?>">
    <label>Novo Nome:</label>
    <input type="text" name="nome">
    <label>Novo Numero:</label>
    <input type="number" name="numero">
    <label>Novo Email:</label>
    <input type="text" name="email">
    <input type="submit"  value="Enviar">
    </fieldset>
<?php
}
?>
</form>
</body>
</html>