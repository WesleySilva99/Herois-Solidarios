<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Seja um heroi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">

function validarSenha(form){
    var senha = document.formulario.senha.value;
    var senhaRepetida = document.formulario.passwd2.value;
    if (senha != senhaRepetida){
        alert("As senhas não conferem. Repita a senha corretamente!");
        document.formulario.passwd2.focus();
        return false;
    }
    if (senha.length < 8 || senha.length > 32) {
    	alert("As senhas estão abaixo ou acima do limite de caracteres! Senhas de 8 até 32 caracteres!");
        document.formulario.passwd2.focus();
        return false;
    }
    if (document.formulario.email.value == "" || document.formulario.email.value.indexOf('@')==-1 || document.formulario.email.value.indexOf('.')==-1 ){
    	alert ("Preencha corretamente o campo email!");
    	document.formulario.email.focus();
    	return false;
    }
}
</script>

  </head>
  <body>

      <!-- Barra de Navegação -->
     
  
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
          <a class="navbar-brand" href="index.php">Inicio</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="galeria.php">Galeria de Fotos <span class="sr-only">(current)</span></a></li>
            <li><a href="Visitas.php">Visitas</a></li>
            <?php
            session_start();
            $usuario = $_SESSION['login'];
            if (!isset($_SESSION['login'])){
              
            ?>

            <li><a href="login.php">Login</a></li>
            <li><a href="cadastro.php">Inscrição</a></li>
            <?php
              }
            ?>
            <li><a href="contatos.php">Contate-Nos</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Doar<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="doacoes/doarbs.php">Doe Dinheiro</a></li>
                <li><a href="doacoes/doetempobs.php">Doe Tempo</a></li>
                <li><a href="doacoes/doaralgo.php">Doe Algo</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <?php if ($_SESSION['login']){ 
              
            ?>
            <li><a href="#"><?php echo "Usuario $usuario"; ?></a></li>
            <li><a href="logout.php">Deslogar</a></li>
            <?php  
              }
            ?>
            
            <li><a href="faq.php">FAQ</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>





                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title" align="center" >Criar Login</div>
                        </div>
                        <div class="panel-body"  >
                            <form name="formulario" id="signupform" class="form-horizontal" method="POST" action="inscricao.php"
                            onsubmit="return validarSenha();" role="form" style="position: relative; left: 150px; margin-top: 1%; margin-right: 1%; margin-bottom: 4cm; margin-left: 1%; padding: 6px;">

                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>
                                 <div class="form-group">
                                    <label for="suscard" class="col-md-3 control-label">Nome de usuário</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nomeusu" placeholder="Ex: xxJuba12xx" required minlength="6" maxlength="32" pattern="[A-Za-z0-9 ]+">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Nome Completo</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nomecom" pattern="[AÁÉÍÓÚÂÊÎÔÛ-ZáéíóúâêîôûçÁÉÍÓÚÂÊÎÔÛa-z ]+" required x-moz-errormessage=”Você esqueceu de preencher este campo.” placeholder="Como consta no seu CPF">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">CPF</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" pattern="^\d{3}.\d{3}.\d{3}-\d{2}$" name="cpf" placeholder="Ex: 000.111.222-33" required x-moz-errormessage=”Você esqueceu de
preencher este campo.”>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="endereco" class="col-md-3 control-label">Endereço</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="endereco" maxlength="100" 
                                        required x-moz-errormessage=”Você esqueceu depreencher este campo.” placeholder="Ex: Rua, Nº, Bairro, Cidade, Estado">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">E-mail</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"
                                          placeholder="exemplo@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Senha</label>
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
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> Cadastrar</button>
                                    </div>
                                </div>

                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="submit" class="btn btn-primary"><i class="icon-facebook">Cadastre-se com o Facebook</i></button></div></div>
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