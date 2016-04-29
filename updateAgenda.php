<!DOCTYP html>
<html lang="pt-br">
    <head>
        <title>Mecânica OsorioCar</title>
        <meta charset="utf-8">
        <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">
    </head>

    <?php
    include './conexao.php';


    //PEGA DO FORMULARIO CRIADO NO ARQUIVO AGENDA
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['phone'];
    $celular = $_POST['cel'];
    $email = $_POST['email'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];



    //echo("$nome $sobrenome $telefone $celular $email $rg $cpf");

        $resultado = mysqli_query($conexao, "select pessoa.idPessoa FROM pessoa INNER JOIN fisica ON (pessoa.idPessoa = fisica.fkPessoa) WHERE cpf = '".$cpf."'") or die("Não foi possível executar a SQL: " . mysqli_error($conexao));
        if ($resultado) {
            while ($row = mysqli_fetch_array($resultado)) {
                $idPessoa = ($row["idPessoa"]);
                break;
            }
        }
        
        echo "</br>".$ipPessoa;
    $resultado1 = mysqli_query($conexao, "UPDATE pessoa SET nome = '" . $nome . "',sobrenome = '".$sobrenome."', telefone = '" . $telefone . "',celular = '" . $celular . "', email = '".$email."' WHERE idPessoa='".$idPessoa."'") or die("No foi possivel executar a SQL: " . mysqli_error($conexao));
    $resultado2 = mysqli_query($conexao, "UPDATE fisica SET rg = '" . $rg . "',cpf = '".$cpf."' WHERE fkPessoa='".$idPessoa."'") or die("No foi possivel executar a SQL: " . mysqli_error($conexao));
    //SE AS INSERÇÕES OCORREREM COM SUCESSO RETORNA À PAGINA AGENDA "PRINCIPAL"
    if ($resultado1 === TRUE && $resultado2 === TRUE) {
        echo "<br/>Usuario alterado com sucesso!";
        header('Location: alterarAgenda.php');
    }

    // fechamento da conexão   
        mysqli_close($conexao);
    ?>
</html>
