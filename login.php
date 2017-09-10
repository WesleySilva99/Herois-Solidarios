<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

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



      <div class="container-fluid">
	<div class="centro" align="center">
	<h1 align="center">Login</h1>

	<form class="form-group" method="POST" action="logon.php">
  <div class="form-group">
    <label for="exampleInputName2">Login</label>
    <input type="text" class="form-control" name="usuario" id="exampleInputName2" placeholder="JaneDone" required minlength="6" maxlength="32" pattern="[a-zA-Z0-9]+">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Senha</label>
    <input type="password" class="form-control" name="senha" id="txtSenha"
    placeholder="**********" name="passwd2"  minlength="8" maxlength="32"
    required x-moz-errormessage=”Você esqueceu de preencher este campo.”>
  </div>

  <button type="submit" class="btn btn-primary center-block ">Entrar</button>
  </form>
				<br>
				<p><a href="#">Esqueci minha senha</a></p>

				<P>Não possui cadastro? click em:      <a href="cadastro.php">Cadastre-se agora</a></p>



			</fieldset>


	</div>
      </div>

     <footer = class=" container-fluid" style="background-color: #458B74; color: #fff; position: absolute; bottom:0; width:100%;">
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