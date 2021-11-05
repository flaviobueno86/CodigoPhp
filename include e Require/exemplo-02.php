<?php


//***Include - tenta funcionar mesmo que o arquivo não exista ou com problema, fora que o include tem mmais recursos: ex. exixte um diretorio "includepef e includeremoto"*****

//include "exemplo-01.php";


//***Require - Obriga que o arquivo exista e que o arquivo esteja funcionando corretamente, caso contrario, ocorre erro faltal*****

//require "exemplo-01.php";



//***Require_Once******
require_once "exemplo-01.php";
require_once "exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;

?>