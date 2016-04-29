<?php

$nome = ($_POST["nome"]);
$senha = ($_POST["senha"]);

if(($nome == 'Bruno') && ($senha == 123)){
    header('Location: menusistema.php');
}
?>


