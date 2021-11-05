<?php

//Exemplo 1
//*** inicial** Enquanto Ifor<10 faça; i++ contador incremental
for($i = 0; $i < 10; $i++){

//** Pular do 200 até 300


 echo $i. "<br>"; 

}

echo "<br>";
//Exemplo 2 - ir de 0 a 1000 pulando de 5 em 5
//*** inicial** Enquanto Ifor<10 faça; i++ contador incremental
for($i = 0; $i < 1000; $i+=5){

//** Pular do 200 até 800
if($i > 200 && $i<800) continue;


//** chegar no 900 para o laço de repetição
if($i === 900 ) break;

 echo $i. "<br>"; 


}



?>