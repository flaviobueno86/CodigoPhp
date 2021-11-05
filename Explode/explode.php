<?php
$dados = array("1234","4568","45677","12345","123456","123456","12345","12564","13246","132456");
//$dados = "1234";"4568";

if(is_array($dados)){

    $total =  $dados; 
    echo "Total de Registros: ".$total;
}else{
echo "Não é um array";

}


?>