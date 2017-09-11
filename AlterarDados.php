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
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Visitas</title>

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

                        <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title" align="center" >Alteração de Dados</div>
                        </div>
                        <div class="panel-body" >

                            <?php
                          $codigo = $_POST['id'];

                          $query = "select * from USUARIO where CODIGO ='$codigo'";

                          $resultado = mysqli_query($conexao, $query);
                          while ($registro = mysqli_fetch_array($resultado)){
                            ?>

                            <form name="formulario" id="signupform" class="form-horizontal" method="POST" action="Atualiza-HS.php"
                            onsubmit="return validarSenha();" role="form" style="position: relative; left: 150px; margin-top: 1%; margin-right: 1%; margin-bottom: 4cm; margin-left: 1%; padding: 6px;">



                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>

                                <input type="hidden" name="id" value="<?=$registro['CODIGO']?>">


                                 <div class="form-group">
                                    <label for="suscard" class="col-md-3 control-label">Novo Login</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="login" value="<?=$registro['LOGIN_USUARIO']?>" required minlength="6" maxlength="32" pattern="[A-Za-z0-9]+">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Novo Nome</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nome" pattern="[AÁÉÍÓÚÂÊÎÔÛ-ZáéíóúâêîôûçÁÉÍÓÚÂÊÎÔÛa-z ]+" required x-moz-errormessage=”Você esqueceu de preencher este campo.” value="<?=$registro['NOMECOMPLETO']?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="endereco" class="col-md-3 control-label">Novo Endereço</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="endereco" maxlength="100"
                                        required x-moz-errormessage=”Você esqueceu depreencher este campo.” value="<?=$registro['ENDERECO']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Novo E-mail</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"
                                          value="<?=$registro['EMAIL']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Nova Senha</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="senha" id="txtSenha" required minlength="8" maxlength="32">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Repita a Senha</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="txtSenha" name="passwd2" oninput="validaSenha(this)" required x-moz-errormessage=”Você esqueceu de
preencher este campo.”>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Alterar</button>
                                    </div>
                                </div>

                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    <div class="col-md-offset-3 col-md-9">
                                    </div></div>

                                    <?php
                                    }
                                    ?>
                            </form>

                         </div>
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
