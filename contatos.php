<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Conate-Nos</title>

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

    session_start();
    $usuario = $_SESSION['login'];


  ?>

  <body>

      <!-- Barra de Navegação -->
       <?php

       require 'navegacao.php';

       ?>


                <!-- Contato-->

            <div class="page-hearder" align="center" style="background-color: #43CD80; border-radius: 600px; margin: 50px; padding: 50px;margin-top:; margin-right: 1%; margin-bottom: 4cm; margin-left: 1%; padding: 1px;">
          <h1>Contate-Nos</h1>

          <img src="images/contato3.png" style=" position:absolute; right:10%; bottom: 15%" class="img-responsive" alt="Responsive image">

      <form nome=formulario class="form-group" role="form" method="POST" action="inserir.php">
        <div class="form-group">
          <label for="exampleInputName2">Nome</label>
          <input type="text" class="form-control" id="exampleInputName2" minlength="2" maxlength="32" placeholder="João Melo" pattern="[AÁÉÍÓÚÂÊÎÔÛ-ZáéíóúâêîôûçÁÉÍÓÚÂÊÎÔÛa-z ]+"
           name="nome" required x-moz-errormessage=”Você esqueceu depreencher este campo.”>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail2">Email</label>
          <input type="email" class="form-control" name="email"  placeholder="exemplo@gmail.com"
           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email">
        </div>
          <div class="form-group">
          <label for="exampleInputText2">Assunto</label>
          <input type="text" class="form-control" id="exampleInputText2" minlength="2" maxlength="20" pattern="[AÁÉÍÓÚÂÊÎÔÛ-ZáéíóúâêîôûçÁÉÍÓÚÂÊÎÔÛa-z ]+"
          name="assunto" required x-moz-errormessage=”Você esqueceu depreencher este campo.”>
          </div>
          <div>
            <label for="form-group">Mensagem</label>
            <textarea class="form-control" rows="10" min="10" maxlength="256" pattern="[AÁÉÍÓÚÂÊÎÔÛ-ZáéíóúâêîôûçÁÉÍÓÚÂÊÎÔÛa-z0-9 ]+" name="mensagem" required x-moz-errormessage=”Você esqueceu depreencher este campo."></textarea>
          </div><br>
            <button type="submit" class="btn btn-primary center-block ">Enviar</button>
          </div>
          </form>
                  </div>
          </div>












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