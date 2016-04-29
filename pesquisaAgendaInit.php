<!DOCTYP html>
<html lang="pt-br">
    <head>
        <title>MecÃ¢nica OsorioCar</title>
        <meta charset="utf-8">
        <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">
        <link rel="stylesheet" type="text/css" href="css/formularios.css">
    </head>
    <body>
        <section>
            <?php
            include './conexao.php';
            // executando a operacao de SQL
            $resultado = mysqli_query($conexao, "select pessoa.idPessoa,pessoa.nome, pessoa.sobrenome, pessoa.telefone, pessoa.celular,pessoa.email, fisica.rg, fisica.cpf "
                    . "FROM pessoa INNER JOIN fisica ON (pessoa.idPessoa = fisica.fkPessoa)") or die("Não foi possível executar a SQL: " . mysqli_error($conexao));
            if ($resultado) {
                echo("<table border='1'>"
                        . "<tr><th>ID</th><th>Nome</th><th>Sobrenome</th><th>Telefone</td><td>Celular</th><th>Email</th><th>RG</th><th>CPF</th></tr>");
                while ($row = mysqli_fetch_array($resultado)) {
                    echo "<tr><td>" .$row["idPessoa"] . "</td><td>" .$row["nome"] . "</td><td>" . $row["sobrenome"] . "</td><td>" . $row["telefone"] . "</td><td>" . $row["celular"] . "</td><td>" . $row["email"] ."</td>"
                            . "<td>" . $row["rg"] ."</td><td>" . $row["cpf"] ."</td></tr>";
                }
                echo("</table>");
            }
            // fechamento da conexÃ£o   
            mysqli_close($conexao);
            ?> 
        </section>
    </body>
</html> 