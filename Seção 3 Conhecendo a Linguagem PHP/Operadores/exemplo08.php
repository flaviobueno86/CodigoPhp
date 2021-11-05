<?php
//*** Precedencia de operadores (qual bloco executa primeiro)

$resultado = 10 + 3 / 2;


echo $resultado;

echo "<br>";

$resultado = (10 + 3) / 2;

echo $resultado;


// Operador Logico
echo "<br>";
$resultado = (10 + 3) / 2 >5 && 10+5 <3;

var_dump($resultado);


// Operador Or (um ou outro)
echo "<br>";
$resultado = (10 + 3) / 2 >5 || 10+5 <3;

var_dump($resultado);




?>