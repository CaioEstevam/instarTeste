<?php 


require_once ("config.php");

//Carrega apenas 1
//$root = new Contatos();
//$root->loadbyId(1);
//echo $root;


//carrega a lista dos contatos
//$lista = contatos::getList();
//echo json_encode($lista);

//carrega uma lista de contatos buscando pelo nome
$search = Contatos::search("Ic");
echo json_encode($search);




/*$sql = new sql();
$contatos = $sql->select("SELECT * FROM tb_contatos");
echo json_encode($contatos);*/


 ?>