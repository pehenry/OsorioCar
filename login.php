<!DOCTYP html>
<html lang="pt-br">
    <head>
        <title>Mecânica OsorioCar</title>
        <meta charset="utf-8">
        <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">

        <link rel="shortcut icon" href="image/favicon.ico">
        
        <link rel="stylesheet" type="text/css" href="css/general.css">
    </head>  
    <body>
        <!--MENU-->
            <nav>
                <table>
                    <tr>
                        <td><a href="index.php">Home</a></td>
                        <td><a href="servicos.php">Serviços</a></td>
                        <td><a href="index.php"><img src="image/Osorio_Car.png" alt="logo"></a></td>
                        <td><a href="email.php">Email</a></td>
                        <td><a href="endereco.php">Endereço</a></td>
                        <td><a href="login.php">Login</a></td>
                    </tr>
                </table>
            </nav>        
        <!--ITENS-->
        <section>
            <form id="login" action="verifica_login.php" method="post">
                <fieldset>
                    <legend> Informações pessoais</legend>
                    <!--OBS: É NECESSARIO O ELEMENTO NAME PARA O PHP O ID É PARA O CSS-->
                    Nome:<br><input type="text" id="nome" name="nome" placeholder="Nome de usuario"><br>
                    Senha:<br><input type="password" id="senha" name="senha" placeholder="***************"><br><br>
                    <input type="submit" value="Entrar" name="submit">
                </fieldset>
            </form>
            <h1>Essa área é reservada para a utilização de funcionairos da Oficina</h1>
        </section>
        <!--RODAPÉ-->
        <footer>
            <p>Todos os direitos reservados ©</p>
        </footer>
    </body>
</html>