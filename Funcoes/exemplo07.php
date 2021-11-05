<?php

// declaração de tipos escaladas

//Quando se tem a certeza que são todos inteiros

/*
function soma(int ...$valores){


return array_sum($valores);


}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";


} */

//Quando se quer retornar uma string

/*

function soma(int ...$valores):string {


return array_sum($valores);


}

echo var_dump(soma (2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";


*/

function soma(float ...$valores):float {


return array_sum($valores);


}

echo var_dump(soma (2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";

?>



