<?php

$a = 10;

//& = passagem de parametro por referencia
function trocaValor(&$b){

$b += 50;


return $b;

}

echo trocaValor ($a) ;
echo "<br>";
echo $a;

?>