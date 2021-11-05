<?php

// FUNÇÃO DATA
// Seção 8, aula 37

//$ts = strtotime("2001-09-11");

$ts = strtotime("now");
$ts2 = strtotime("+ 1 week");


echo date("l, d/m/Y", $ts);
echo "<br>";
echo date("l, d/m/Y", $ts2);



?>