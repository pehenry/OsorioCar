<!DOCTYP html>
<html lang="pt-br">
    <head>
        <title>Mecanica OsorioCar</title>
        <meta charset="utf-8">
        <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">
        <link rel="stylesheet" type="text/css" href="css/formularios.css">
    </head>  
    <body>
        <!--MENU-->
        <link rel="shortcut icon" href="image/favicon.ico">

        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
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

                        <!--                        ComboBox
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Competições<span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="calendario.html" target="palco">Calendário</a></li>
                                                        <li><a href="federacaooficial.html" target="palco">Federação Oficial</a></li>
                                                    </ul>
                                                </li>
                        
                                                <li><a href="#">Noticias</a></li>
                        
                                                <li class="dropdown">
                                                    ComboBox
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">No Brasil<span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Nossos Atletas</a></li>
                                                    </ul>
                                                </li>
                                                ComboBox
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Como Estilo de Vida<span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="ganhospsaude.html" target="palco">Ganhos para a Saúde</a></li>
                                                        <li><a href="lemas_e_respeito.html" target="palco">Lemas e Respeito</a></li>
                                                    </ul>
                                                </li>  
                                                <li><a href="formulario.html" target="palco">Manifeste-se</a></li>
                                            </ul>
                        -->
                </div>
            </div>
        </nav>
        <section>
            <hr>
            <legend><h1>Pesquisar</h1></legend>
            <form name="email" action="exibirAgendaAlEx.php" method="post">
                Nome:*<input type="text" id="nome" name="nome" required="required">
                Sobrenome:*<input type="text" id="sobrenome" name="sobrenome" required="required">&nbsp;</br></br>
                Cpf:*<input type="text" id="cpf" name="cpf" required="required"></br></br>
                <input type="submit" value="Selecionar" name="submit">
            </form>
            </br>
            <hr>
            <iframe name="palco" src="iframeAgenda.php" width="100%"></iframe>
        </section>
    </body>
</html>