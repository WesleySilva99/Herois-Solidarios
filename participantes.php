<?php
  session_start();
  $_SESSION['login'];
  if (!isset($_SESSION["administrador"])){
    header('location: ../index.php');
    die();
  }
 ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Participantes</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

     <!-- Barra de Navegação -->
        <?php

    require 'navegacao.php';

      ?>



<center>
<div class="table-responsive">
<h1>Usuários Participantes da Visita</h1><br><br>
<table border = "1" class="table" style="border: groove 2px; padding: 0.75em; margin: 2px;">
<tr>
 <th class="text-center">Codigo do Usuario</th><th class="text-center">Nome</th><th class="text-center">E-mail</th>

</tr>

<?php
  require('conexao.php');

  $codigo = $_POST['id'];
  $visita = "select COD_VISITA from TEMP_USU, VISITAS where COD_VISITA = CODIGO and CODIGO = '$codigo' ";
  $resul = mysqli_query($conexao, $visita);
  $array = mysqli_fetch_array($resul);
  $id = $array['COD_VISITA'];


  $query = "select CODIGO, NOMECOMPLETO, EMAIL from USUARIO, TEMP_USU where CODIGO = COD_USUARIO and COD_VISITA = '$id' ";
  $resultado = mysqli_query($conexao, $query);
  while ($registro = mysqli_fetch_array($resultado)){

  ?>


<tr>
       <td> <?= $data = $registro["CODIGO"] ?></td>
       <td> <?= $registro["NOMECOMPLETO"] ?></td>
       <td> <?= $registro["EMAIL"] ?></td>

</tr>

<?php
  }
?>

</table>
</div>
</center>

     <footer = class=" container-fluid" style="background-color: #458B74; color: #fff; position: fixed; bottom:0px; width:100%;">
      <center>
      <span><a href="https://www.facebook.com/Herois-Solid%C3%A1rios-154532011421669/" ><img src="images/fac.png" width="35px" style=" position: relative;  right: 0px" alt="Responsive image"></a></span>
      <span><a href="https://www.instagram.com/?hl=pt-br" ><img src="images/ins.png" width="35px" style=" position: relative;  right: 0px" alt="Responsive image"></a></span>
      <span><a href="https://twitter.com/login?lang=pt" ><img src="images/twt.png" width="35px" style=" position: relative;  right: 0px" alt="Responsive image"></a></span>

      <br>

      Rua João Benedito de Lima, Jaboatão do Guararapes - PE <br> <b>CEP:</b> 00000-000 <br>
      <b>Telefone para contato:</b> (81)98619-7555<br>
      <b>Gmail:</b> heroissolidarios@gmail.com
    </center>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>