<!DOCTYP html>
<html lang="pt-br">
    <head>
        <title>Mecanica OsorioCar</title>
        <meta charset="utf-8">
        <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">
        <link rel="stylesheet" type="text/css" href="css/formularios.css">

        <link rel="shortcut icon" href="image/favicon.ico">

        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
                        <!--Normal-->
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
                        <!--Teste-->
                </div>
            </div>
        </nav>
        <section>
            <legend><h2>Informacoes Pessoais</h2></legend>
            <form name="email" action="createAgenda.php" method="post">
                <fieldset>
                    Nome:*<input type="text" id="nome" name="nome" placeholder="Seu nome" title="Preencha o campo NOME (Apenas letras A-z no mínimo 3 dígitos)" pattern="[A-Za-z]{3,}" required>
                    Sobrenome:*<input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" title="Preencha o campo SOBRENOME (Apenas letras A-z no mínimo 3 dígitos)" pattern="[A-Za-z]{3,}" required></br>
                    Telefone:*</br><input type="tel" id="phone" name="phone" placeholder="9999-9999" pattern="[0-9]{4}-[0-9]{4}" title="Preencha o campo TELEFONE corretamente (9999-9999)" required></br>
                    Celular:*</br><input type="tel" id="cel" name="cel" placeholder="99999-9999" pattern="[0-9]{5}-[0-9]{4}" title="Preencha o campo CELULAR corretamente (99999-9999)" required></br>
                    Email:</br><input type="email" id="email" name="email" placeholder="email@dominio.com" title="Preencha o campo EMAIL corretamente" required></br>
                    Rg:</br><input type="text" id="rg" name="rg" placeholder="99.999.999-9" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}-[0-9]{1}" title="Preencha o campo RG (99.999.999-9)" required></br>
                    Cpf:</br><input type="text" id="cpf" name="cpf" placeholder="999.999.999-99" title="Preencha o campo CPF 999.999.999-99" required></br>

                    <input type="submit" value="Salvar" name="submit" >
                    <!--Teste-->
                </fieldset>
            </form> 
            <hr>
            <legend><h1>Pesquisar Avançada</h1></legend>
            <form name="email" action="advancedSearchAgenda.php" method="post">
                Nome:*<input type="text" id="nome" name="nome" placeholder="Seu nome" title="Preencha o campo Nome com apenas letras A-z no mínimo 3 dígitos" pattern="[A-Za-z]{3,}" required>
                Sobrenome:*<input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" title="Preencha o campo Sobrenome" pattern="[A-Za-z]{3,}" required>&nbsp;
                <input type="submit" value="Pesquisar" name="submit">
            </form>
            </br>
            <hr>
            <iframe name="palco" src="iframeAgenda.php" width="100%"></iframe>
        </section>
    </body>
</html>
