<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

// importante ter o true no final pois senão virará objeto.
$data = json_decode($json, true);


var_dump($data);

?>