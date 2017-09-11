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
    <title>Lista de Usuarios</title>

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
<?php

require 'navegacao.php';

?>
     <!-- Barra de Navegação -->
        <center>
        <h1> Usuarios</h1>
        <br>
        <table border = "1" class="table-responsive" style="border: groove 2px; padding: 0.75em; margin: 2px;">
            <tr>
              	<th>Administrador</th>
                <th>Nome do usuário</th>
                <th>Nome completo</th>
                <th>CPF</th>
                <th>Endereço</th>
                <th>Email</th>
                <th>Opções</th>
            </tr>

            <?php
                $query = "select * from USUARIO";
                require ('conexao.php');
                $resultado = mysqli_query($conexao,$query);
                while($row = mysqli_fetch_array($resultado)){
            ?>

            <tr>
            	<td><?php if ($row["ADMINISTRADOR"] == 1) {
            		?>
            		Sim
            	<?php
            }else{
            	?>
            	Não

            	<?php
            }
            	?></td>
                <td> <?= $row["LOGIN_USUARIO"]?> </td>
                <td> <?= $row["NOMECOMPLETO"]?> </td>
                <td> <?= $row["CPF"]?> </td>
                <td> <?= $row["ENDERECO"]?> </td>
                <td> <?= $row["EMAIL"]?> </td>
                <td align="center">
        <form action="#" method="POST">
          <input type="hidden" name="id" value="<?= $row["CODIGO"]?>">
          <input type="submit" name="" value="Deletar">
        </form>
        <form action="AlterarDados.php" method="POST">
          <input type="hidden" name="id" value="<?= $row["CODIGO"]?>">
          <input type="submit" name="" value="Alterar">
        </form>
       </td>
            </tr>

            <?php
                }
            ?>
        </table>
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