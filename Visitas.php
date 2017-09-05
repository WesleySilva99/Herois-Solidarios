<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
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

      require'navegacao.php';

      ?>



<center>
<div class="table-responsive">
<h1>Visitas</h1><br><br>
<table border = "1" class="table">
<tr>
 <th class="text-center">Código da visita</th>  <th class="text-center">Data das Visitas</th><th class="text-center">Local</th><th class="text-center">Endereço</th>
</tr>


<?php
  

$conexao = mysqli_connect('localhost', 'root', 'Eus@uacad', 'HEROIS_SOLIDARIOS');
  $query = 'select * from VISITAS order by DT_VISITA asc';
  $resultado = mysqli_query($conexao, $query);
  while ($registro = mysqli_fetch_array($resultado)){
  ?>


<tr>
       <td> <?= $registro["COD_VISITA"] ?></td>
       <td> <?= $registro["DT_VISITA"] ?></td>
       <td> <?= $registro["LOCAL_VISITA"] ?></td>
       <td> <?= $registro["ENDERECO"] ?></td>
</tr>

<?php
  }
?>

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