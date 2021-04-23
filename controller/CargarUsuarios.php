<?php

require_once("../model/Data.php");
require_once("../model/Usuario.php");

$data = new Data();


$usuarios =  $data->listarUsuarios();

echo json_encode($usuarios);



?>