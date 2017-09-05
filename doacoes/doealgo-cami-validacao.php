<?php


//validação do "doe algo"
$quant = $_POST['quant'];
$tipo = $_POST['tipo'];
$info = $_POST['info'];
$outrositens = $_POST['outrositens'];

require ('conexao.php');
$query = "insert into DOACAO_ITENS(QUANTIDADE, TIPO_DOACAO, INFORMACAO_DOACAO, OUTROS_ITENS,COD_DOACAO_ITENS) values ('".$quant."','".$tipo."','".$info."','".$outrositens."', null);";

  $result = mysqli_query($conexao, $query)or die('Could not look up user information; ' . mysqli_error($conexao)); //Realiza a consulta

    if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Cadastro feito com sucesso</p>";
        echo '<a href="doaralgo.php">Voltar para formulário de doar algo</a>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "Erro, não possível inserir no banco de dados";
    }

    mysqli_close($conexao); //fecha conexão com banco de dados
?>
