<!DOCTYPE html>
<html>

<body>


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
          <a class="navbar-brand" href="../index.html">Inicio</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="../galeria.html">Galeria de Fotos <span class="sr-only">(current)</span></a></li>
            <li><a href="../Visitas.html">Visitas</a></li>
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
            <li><a href="../contatos.html">Contate-Nos</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Doar<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="doarbs.php">Doe Dinheiro</a></li>
                <li><a href="doetempobs.php">Doe Tempo</a></li>
                <li><a href="doaralgo.php">Doe Algo</a></li>
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
            <li><a href="../faq.html">FAQ</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    </body>
</html>