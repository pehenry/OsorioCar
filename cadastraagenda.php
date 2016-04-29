<!DOCTYP html>
<html lang="pt-br">
    <head>
        <title>Mecânica OsorioCar</title>
        <meta charset="utf-8">
        <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">
    </head>

    <?php
    include './conexao.php';

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['phone'];
    $celular = $_POST['cel'];
    $email = $_POST['email'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];

    echo("$nome $sobrenome $telefone $celular $email $rg $cpf");
// executando a operacao de SQL
    $resultado = mysqli_query($conexao, "INSERT INTO pessoa(`nome`,`sobrenome`,`telefone`,`celular`,`email`)"
            . " VALUES ('" . $nome . "','$sobrenome'," . $telefone . "," . $celular . ",'$email')")
            or die("N�o foi possivel executar a SQL: " . mysqli_error($conexao));

    $resultado1 = mysqli_query($conexao, "insert fisica(fkPessoa,cpf,rg)values((select max(idpessoa) from pessoa)," . $rg . "," . $cpf . ")")
            or die("Não foi possivel executar a SQL: " . mysqli_error($conexao));

    if ($resultado === TRUE && $resultado1 === TRUE) {
        echo "<br/>Usuario inserido com sucesso!";
        header('Location: agenda.php');
    } else {
        echo "<br/>Erro na insercao!";
    }
// fechamento da conexão   
    mysqli_close($conexao);
    ?>
</html>