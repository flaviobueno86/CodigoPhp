<?php

function ola($texto){

return "Olá $texto!<br>";

}

echo ola("mundo");
echo ola("Glaucio");
echo ola("Joao");


// POde definir valor padrão


function ola2($texto = "mundo 2"){

return "Olá $texto!<br>";

}


?>