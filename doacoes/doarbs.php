<?php
  session_start();
  $_SESSION['login'];
  if (!$_SESSION ['login']){
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
    <title>Doe Algo</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

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
    <div class="jumbotron" style="margin: 30px; padding: 30px; width: 80%;" >
    <h1 align="center">Doações</h1><br>
    <p align="justify">&ensp; Nós do Grupo Heróis Solidarios precisamos da sua ajuda, não somente para manter nosso trabalho mas também para ajudar as pesoas que necessitam.
    Buscamos da maneira mas solidária possível ajudar não somente nossos irmãos que estão em hospitais, mais também pessoas que moram nas ruas e não
    tem lugar para ficar e alimento para sobreviver. Toda vida tem seu valor e a maioria dessas pessoas ás vezes só querem uma chance, então ajude nos
    a dar essa chance a elas doando quanto você puder. Toda ajuda é bem vinda. Por favor, não
    deixe de ajudar, somos inteiramente gratos e que Deus vos abençoe.</p>
    <p><a class="btn btn-primary btn-lg" href="../doacoes/formulariodinheiro.php" role="button">Clique para doar</a></p>
      </div>
      </center>


      <footer = class=" container-fluid" style="background-color: #458B74; color: #fff; position: relative; bottom:0px; width:100%;">
      <center>
      <span><a href="https://www.facebook.com/Herois-Solid%C3%A1rios-154532011421669/" ><img src="../images/fac.png" width="35px" style=" position: relative;  right: 0px" alt="Responsive image"></a></span>
      <span><a href="https://www.instagram.com/?hl=pt-br" ><img src="../images/ins.png" width="35px" style=" position: relative;  right: 0px" alt="Responsive image"></a></span>
      <span><a href="https://twitter.com/login?lang=pt" ><img src="../images/twt.png" width="35px" style=" position: relative;  right: 0px" alt="Responsive image"></a></span>

      <br>

      Rua João Benedito de Lima, Jaboatão do Guararapes - PE <br> <b>CEP:</b> 00000-000 <br>
      <b>Telefone para contato:</b> (81)98619-7555<br>
      <b>Gmail:</b> heroissolidarios@gmail.com
    </center>
    </footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>