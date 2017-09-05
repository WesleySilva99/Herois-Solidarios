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
    <title>Doe Dinheiro</title>

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
      <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">Inicio</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="../galeria.php">Galeria de Fotos <span class="sr-only">(current)</span></a></li>
            <li><a href="../Visitas.php">Visitas</a></li>
            <?php
            session_start();
            $usuario = $_SESSION['login'];
            if (!isset($_SESSION['login'])){

            ?>
            <li><a href="../login.php">Login</a></li>
            <li><a href="../cadastro.php">Inscrição</a></li>
            <?php
              }
            ?>
            <li><a href="../contatos.php">Contate-Nos</a></li>
           <?php if ($_SESSION['login']){

            ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Doar<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../doacoes/doarbs.php">Doe Dinheiro</a></li>
                <li><a href="../doacoes/doaralgo.php">Doe Algo</a></li>
              </ul>
            </li>
          </ul>
          <?php
              }
            ?>
            <ul class="nav navbar-nav navbar-right">
            <?php if ($_SESSION['login']){
            ?>
            <li><a href="listagem.php">Lista de Usuarios</a></li>
            <li><a href="#"><?php echo "Usuario $usuario"; ?></a></li>
            <li><a href="logout.php">Deslogar</a></li>
            <?php
              }
            ?>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="../faq.php">FAQ</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<center>
<form action="dinheiro.php" method="POST" class="form-group" style="width: 80%">
<fieldset style="border: groove 2px; padding: 0.75em; margin: 2px; display: block">
<div class="panel panel-info">
  <div class="panel-heading" align="center">Doe quanto quiser preenchendo o formulário</div>


  </div>
</div>
  <div class="form-group">
    <label for="exampleInputName2">Digite a Quantia</label>
    <input type="text" name="quantia" class="form-control" id="exampleInputName2" placeholder="2.000,00"
     >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Descrição da doação</label>
    <textarea class="form-control" name="descricao" rows="3" minlength="4" maxlength="100"></textarea>
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