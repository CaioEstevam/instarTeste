<?php 


require_once ("config.php");


$sql = new sql();

$contatos = $sql->select("SELECT * FROM tb_contatos");


echo json_encode($contatos);


 ?>