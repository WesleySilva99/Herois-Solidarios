<?php
session_start();
require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Inicio</title>

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


  <body>

      <!-- Barra de Navegação -->
    <?php

    require 'navegacao.php';

      ?>




<!-- pagina 1 -->

  <center>


    <div class="page-header">
  <h1 style="font-size: 64px">Heróis Solidários <br><small>Levando alegria por todos os lugares</small></h1>
</div>

    <div class="jumbotron" style="margin: 30px; padding: 30px; width: 80%;" >
    <h1>História</h1>

        <p align="justify">No começo, os heróis solidário nem se conheciam, mas graças ao principal integrante do grupo atualmente, João Paulo Uchoa,
        com o seu canal no Youtube (Cosplay TV), iniciou a fazer algumas entrevistas com alguns <a href="https://www.google.com.br/search?q=cosplay&oq=cosplay&aqs=chrome..69i57j69i65j0l4.1959j0j7&sourceid=chrome&ie=UTF-8"> cosplayers</a>.
        Ninguém do atual grupo se conhecia ainda, mas todos gostavam de colaborar com o próximo. No início de 2014, pela primeira vez eles
        decidiram se encontrar para fazer uma doação  de sangue para pessoas que estavam enternadas lá no HEMOPE. Assim, eles gostaram do primeiro
        encontro e decidiram dessa vez se encontrar em um abrigo de idosos levando alimentos, vestimentas e muita alegria para todos que la habitavam.
        Hoje em dia, eles continuam se encontrando e levando alegria e felicidade aonde eles passam.</p>
      </div>
      <br><br>



    </table>
    <!--- carrosel -->

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/h5.jpg" alt="Responsive image" width="500px">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/h2.jpg" alt="Responsive image" width="500px">
      <div class="carousel-caption">
        ...
      </div>
    </div>

    <div class="item">
      <img src="images/h3.jpg" alt="Responsive image" width="316px">
      <div class="carousel-caption">
        ...
      </div>
    </div>
      <font size="30">HEMOPE</font>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <br>
    <br>
    <br>




         <footer = class=" container-fluid" style="background-color: #458B74; color: #fff; position: relative; bottom:0; width:100%;">
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