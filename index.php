<?php 


require_once ("config.php");

$root = new Codigo();

$root->loadbyId(2);

echo $root;


/*$sql = new sql();

$contatos = $sql->select("SELECT * FROM tb_contatos");


echo json_encode($contatos);*/


 ?>