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
    echo $cpf = $_POST['cpf'];

    $resultado = mysqli_query($conexao, "select pessoa.idPessoa FROM pessoa INNER JOIN fisica ON (pessoa.idPessoa = fisica.fkPessoa) WHERE cpf = '".$cpf."'") or die("Não foi possível executar a SQL: " . mysqli_error($conexao));
        if ($resultado) {
            while ($row = mysqli_fetch_array($resultado)) {
                $idPessoa = ($row["idPessoa"]);
                break;
            }
        }

    $resultado = mysqli_query($conexao, "DELETE FROM pessoa WHERE idPessoa = '" . $idPessoa . "'") or die("Não foi possível executar a SQL: " . mysqli_error($conexao));
    if ($resultado === TRUE) {
        echo "<br/>Usuario excluido com sucesso!";
        header('Location: alterarAgenda.php');
    }
    ?>