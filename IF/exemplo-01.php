<?php

$qualASuaIdade = 19;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

	echo "Criança";


} else if ($qualASuaIdade < $idadeMaior) {
	echo "Adolecente";

} else if ($qualASuaIdade < $idadeMelhor) {

echo "Adulto";

} else {
	echo "=Idoso !";

}


echo "<br>";

//******* Operador ternario

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"maior de Idade";




?>

