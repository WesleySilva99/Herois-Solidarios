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
<br>
    <table align="center" style="width: 80%">
    <h1 align="center">Veja o que você pode doar</h1><br>
    <tr align="center"><td><img src="../images/calcados.png" class="img-responsive" alt="Responsive image">Doe Calçados
</td><td><img src="../images/colchoes.png" class="img-responsive" alt="Responsive image">Doe Colchões
</td><td><img src="../images/eletrodomesticos.png" class="img-responsive" alt="Responsive image">Doe Eletrodomesticos</td>
<td><img src="../images/eletronicos.png" class="img-responsive" alt="Responsive image">Doe Eletronicos</td></tr><br>

<tr align="center"><td><img src="../images/informatica.png" class="img-responsive" alt="Responsive image">Doe Eletronicos</td>
<td><img src="../images/linha-branca.png" class="img-responsive" alt="Responsive image">Doe Linha Branca</td>
<td><img src="../images/livros.png" class="img-responsive" alt="Responsive image">Doe Livros</td>
<td><img src="../images/moveis.png"  class="img-responsive" alt="Responsive image">Doe Moveis
</td></tr>

<tr align="center"><td><img src="../images/roupas.png" class="img-responsive" alt="Responsive image">Doe Roupas</td>
<td><img src="../images/utensilios.png" class="img-responsive" alt="Responsive image">Doe Utensilios</td>
<td><img src="../images/brinquedos.png" class="img-responsive" alt="Responsive image">Doe Brinquedos</td></tr>

</table><br><br>

<center>
<form class="form-group" method="POST" action="doealgo-cami-validacao.php" style="width: 80% margin-top: 1%; margin-right: 1%; margin-bottom: 4cm; margin-left: 1%; padding: 6px;">
<fieldset style="border: groove 2px; padding: 0.75em; margin: 2px; display: block">
<div class="panel panel-info">
  <div class="panel-heading" align="center">Especifique aqui a doação</div>


  </div>
</div>
  <div class="form-group">
    <label for="exampleInputName2">Qtde.</label>
    <input type="number" name="quant" class="form-control" required x-moz-errormessage=”Você esqueceu de
preencher este campo.”>

  </div>
  <div class="form-group">
    <label for="exampleInputName2">Tipo de Doação</label>
    <select class="form-control" nome="tipo">
      <option value=""></option>
      <option value="">Brinquedos</option>
      <option value="2">Calçados</option>
      <option value="3">Colchões</option>
      <option value="4">Eletronicos</option>
      <option value="5">Eletrodomesticos</option>
      <option value="6">Itens de Informatica</option>
      <option value="7">Livros</option>
      <option value="8">Linha Branca</option>
      <option value="9">Moveis</option>
      <option value="10">Roupas</option>
      <option value="11">Utensilios</option>
      <option value="12">Alimentos</option>

    </select>
  </div>
    <div class="form-group">
    <label for="exampleInputName2">Outros itens</label>

    <textarea rows="3" class="form-control" pattern="[AÁÉÍÓÚÂÊÎÔÛ-ZáéíóúâêîôûçÁÉÍÓÚÂÊÎÔÛa-z ]+" nome="outrositens"></textarea>

  </div>
  <div class="form-group">
    <label for="exampleInputName2">Informe aqui o que você quer doar</label>
    <input type="text" class="form-control" id="exampleInputName2"  pattern="[AÁÉÍÓÚÂÊÎÔÛ-ZáéíóúâêîôûçÁÉÍÓÚÂÊÎÔÛa-z ]+"  required x-moz-errormessage=”Você esqueceu de
preencher este campo.” minlength="5" maxlength="20" nome= "info">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </fieldset>
</form>
</center>
<br>

      <footer = class=" container-fluid" style="background-color: #458B74; color: #fff; position: fixed; bottom:0px; width:100%;">
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