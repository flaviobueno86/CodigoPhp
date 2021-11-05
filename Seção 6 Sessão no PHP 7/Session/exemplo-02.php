<?php

// chamada arquivo config
require_once("config.php");

//Apaga as variaveis de sessão
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

// Exclui a variavel e remove o usuario
session_destroy();

?>