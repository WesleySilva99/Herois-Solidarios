<?php


//Formulario POST
$dia = inverteData($_POST['dia']);
$horario = $_POST['horario'];
$local= $_POST['local'];



function inverteData($data, $separar = '-', $juntar = '-'){
        return implode($juntar, array_reverse(explode($separar, $data)));
}


$conexao = mysqli_connect('10.31.30.92', 'root', '@luno1fpe', 'HEROIS_SOLIDARIOS');
$query = "insert into VISITAS(CODIGO, DATA_VIS, HORARIO_VISITA, LOCAL, ENDERECO, HISTORIA)
values (null,'".$dia."','".$horario."','".$local."', null, null);";

  $result = mysqli_query($conexao, $query)or die('Could not look up user information; ' . mysqli_error($conexao)); //Realiza a consulta

    if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Cadastro feito com sucesso</p>";
        echo '<a href="formulariotempo.html">Voltar para formulário doar tempo</a>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "Erro, não possível inserir no banco de dados";
    }

    mysqli_close($conexao); //fecha conexão com banco de dados
?>
