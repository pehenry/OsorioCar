<!DOCTYP html>
<html lang="pt-br">
    <head>
        <title>Mecânica OsorioCar</title>
        <meta charset="utf-8">
        <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">

        <link rel="shortcut icon" href="image/favicon.ico">

        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!--        <link rel="shortcut icon" href="image/favicon.ico">-->
        <link rel="stylesheet" type="text/css" href="css/inside_system.css">
    </head>  
    <body>  
        <!--MENU-->
        <nav class="navbar navbar-inverse" style="border-radius:0;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="menusistema.php">Inicio</a></li>

                        <!--ComboBox-->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="historico.html">Agenda<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="agenda.php">Cadastrar e Consultar</a></li>
                                <li><a href="alterarAgenda.php">Alterar e Excluir</a></li>
                            </ul>
                        </li>

                        <!--Normal-->
                        <li><a href="login.php">Sair</a></li>
                </div>
            </div>
        </nav>
        <?php
        include './conexao.php';
        // executando a operacao de SQL
        $nome = $_POST['nome'];
        $sobrenome = $_POST ['sobrenome'];
        $cpf = $_POST['cpf'];
        $telefone = '';

        $resultado = mysqli_query($conexao, "select pessoa.idPessoa,pessoa.nome, pessoa.sobrenome, pessoa.telefone, pessoa.celular,pessoa.email, fisica.rg, fisica.cpf "
                . "FROM pessoa INNER JOIN fisica ON (pessoa.idPessoa = fisica.fkPessoa) WHERE nome = '" . $nome . "'AND sobrenome='" . $sobrenome . "'AND fisica.cpf='" . $cpf . "'") or die("Não foi possível executar a SQL: " . mysqli_error($conexao));
        if ($resultado) {
            while ($row = mysqli_fetch_array($resultado)) {
                $row["idPessoa"];
                $nome = $row["nome"];
                $sobrenome = $row["sobrenome"];
                $telefone = $row["telefone"];
                $celular = $row["celular"];
                $email = $row["email"];
                $rg = $row["rg"];
                $cpf = $row["cpf"];
            }
        }

        if ($telefone != '') {

            print '
        <!DOCTYP html>
        <html lang="pt-br">
        <head>
            <title>Mecanica OsorioCar</title>
            <meta charset="utf-8">
            <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">
            <link rel="stylesheet" type="text/css" href="css/formularios.css">
        </head>  
        <body>
            <legend><h2>Informacoes Pessoais</h2></legend>
            <form name="email" action="updateAgenda.php" method="post">
                <fieldset>
                    Nome:*<input type="text" id="nome" name="nome" value="' . $nome . '" required="required">
                    Sobrenome:*<input type="text" id="sobrenome" name="sobrenome" value="' . $sobrenome . '" required="required"></br>
                    Telefone:*</br><input type="tel" id="phone" name="phone" value="' . $telefone . '" required="required"></br>
                    Celular:*</br><input type="tel" id="cel" name="cel" value="' . $celular . '" required="required"></br>
                    Email:</br><input type="email" id="email" name="email" value="' . $email . '" required="required"></br>
                    Rg:</br><input type="text" id="rg" name="rg" value="' . $rg . '"></br>
                    Cpf:</br><input type="text" id="cpf" name="cpf" value="' . $cpf . '"></br>

                    <input type="submit" value="Alterar" name="submit" >
            </form>        
            
            <form name="email" action="deleteAgenda.php" method="post">
                    <input type="hidden" id="cpf" name="cpf" value="' . $cpf . '">
                    </br><input type="submit" value="Excluir" name="submit" >
                </fieldset>
            </form> 
        </body>
    </html>';
        } else {
            echo "<script>alert('Valores Invalidos');";
            echo "javascript:window.location='alterarAgenda.php';</script>";
            
        }

// fechamento da conexão 
        ?> 
    </body>    
</html>
