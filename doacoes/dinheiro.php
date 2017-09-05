<?php
$valor = $_POST['quantia'];
$desc = $_POST['descricao'];
$strcon = mysqli_connect('127.0.0.1', 'root', '0105cs1655kl@G', 'HEROIS_SOLIDARIOS') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO DOACAO_DIN (QUANTIA, DESCRICAO) VALUES ";
$sql .= "('$valor', '$desc')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!<br>";
echo "<a href = \"formulariodinheiro.php\">Voltar para o formulário</a>";
?>