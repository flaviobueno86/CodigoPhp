<?php
 
 $pessoas = array();

//função de array adicionar um item depois da array ja foi criada - array_push

array_push($pessoas, array(
  'nome' => 'João',
  'idade' => 20

));


array_push($pessoas, array(
  'nome' => 'Glaucio',
  'idade' => 25

 ));


echo json_encode($pessoas);
  

?>