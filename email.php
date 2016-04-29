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
        <div id="menu">
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
        </div>    
        <!--ITENS-->
        <section>
            <h1>Entre em contato conosco</h1>
            <br>
            <form name="email" action="#" method="#">
                <fieldset>
                    <legend>Informações Pessoais</legend>
                    Nome:<br>
                    <input type="text" id="nome" name="nome"><br>
                    Telefone:<br>
                    <input type="text" id="phone" name="phone"><br>
                    Email:<br>
                    <input type="email" id="email" name="email"><br>
                    Mensagem<br>
                    <textarea name="comenst" cols="75" rows="9"></textarea><br>
                    <br>
                    <input type="submit" value="Enviar" name="submit">
                    <br>
                    <br>
                </fieldset>
            </form>
        </section>
        <!--RODAPÉ-->
        <footer>
            <p>Todos os direitos reservados ©</p>
        </footer>
    </body>
</html>