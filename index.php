<?php 


require_once ("config.php");

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	

});

$app->run();

//Carrega apenas 1
//$root = new Contatos();
//$root->loadbyId(1);
//echo $root;


//carrega a lista dos contatos==============================================================
//$lista = contatos::getList();
//echo json_encode($lista);

//carrega uma lista de contatos buscando pelo nome
//$search = Contatos::search("Ic");
//echo json_encode($search);


//UPDATE=====================================================================================

/*$editar = new Contatos();

$editar->loadById(2);

$editar->update(1006,"Jabiraka", "jabiraka@baranga.com.br", "rua 13", "5555-1010", "99881-3578", "Parksville", "ZV", "foto top", "2012-11-11", "Teste Final");*/

//DELETE =====================================================================================

/*$apagar = new Contatos();

$apagar->loadbyId(2);

$apagar->delete();

echo $apagar;*/


/* SELECT  ==================================================================================
$sql = new sql();
$contatos = $sql->select("SELECT * FROM tb_contatos");
echo json_encode($contatos);
============================================================================================*/




$contatos = new contatos();

$lista = contatos::getList();

 ?>


 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Instar</title>
    <link rel="stylesheet"href="CSS\normalize.css">
    <link rel="stylesheet"href="CSS\style.css">
</head>
<body>
    <header class="cabecalho">
        <a href="index.php" class="logo">Instar</a>
         <nav class="menu-principal">
                    <ul class="menu-principal__lista">
                    <li><a class="menu-principal__item menu-principal__item--atual" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item" href="cadastro.php">Cadastro</a></li>
                    <li><a class="menu-principal__item" href="lista.php">Registro</a></li>
                </ul>
        </nav>
    </header>

 
 

 	
 	
 
 </body>
 </html>
 
