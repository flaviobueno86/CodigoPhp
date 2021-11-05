<?php
//recuperar o ID desejado
session_id('le2agjf2usn5oo5241s5h6t5gbarray');

require_once("config.php");


// atualiza o id da sessão
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

//recuperar sessão




?>