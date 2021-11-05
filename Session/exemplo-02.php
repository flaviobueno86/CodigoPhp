<?php

require_once("config.php");

//session_start();

// limpa a variavel de sessão
session_unset($_SESSION['nome']);



// ele cria a sessão no arquivo exemplo-01 e aqui

echo $_SESSION['nome'];


// destroi a variavel de sessao
// ******session_destroy($_SESSION['nome']);
?>