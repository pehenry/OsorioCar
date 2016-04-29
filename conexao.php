<?php

//conexÃ£o com o banco de dados
$banco = "oficina";
$host = "127.0.0.1:3308"; //DESTINO DO BANCO
$usuario = "root"; // USUARIO DO BANCP
$senha = ""; // SENHA DO BANCO

$conexao = mysqli_connect($host,$usuario,'',$banco) or die (mysql_error());

// tratamento de erros
  if (mysqli_connect_error())
  {
      echo "Não foi possível conectar: " . mysqli_connect_error();
  } 
?>