<?php 


require_once ("config.php");

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	

});

$app->run();


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
                    <li><a class="menu-principal__item" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item" href="cadastro.php">Cadastro</a></li>                    
                    <li><a class="menu-principal__item menu-principal__item--atual" href="lista.php">Registro</a></li>
                </ul>
        </nav>
    </header>

 
 <body>

 	</form>

 	<table>
 		<thead>
 			<tr>
 				<th>Código</th>
 				<th>Categoria</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Endereço</th>
				<th>Telefone</th>
				<th>Celular</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>Foto</th>
				<th>Nascimento</th>
				<th>Observações</th>
				<th>Funções</th>
			</tr>
 		</thead>
 		<tbody>
 			<?php
 				if(is_array($lista) && count($lista))
 				{
 					foreach($lista as $k => $v)
 					{ 						
 			?>
 			<tr> <!-- Puxa informações da tabela no banco de dados-->
 				<td><?php echo $v['codigo']; ?></td> 
 				<td><?php echo $v['categorias_codigo']; ?></td>
 				<td><?php echo $v['nome']; ?></td>
 				<td><?php echo $v['email']; ?></td>
 				<td><?php echo $v['endereco']; ?></td>
 				<td><?php echo $v['telefone']; ?></td>
 				<td><?php echo $v['celular']; ?></td>
 				<td><?php echo $v['cidade']; ?></td>
 				<td><?php echo $v['estado']; ?></td>
 				<td><?php echo $v['foto']; ?></td>
 				<td><?php echo $v['data_nascimento']; ?></td>
 				<td><?php echo $v['observacoes']; ?></td>

 				<td>
 					<a href="editar.php?codigo=<?php echo $v['codigo']; ?>">
 						Editar
 					</a>

 					||

 					<a href="remover.php?codigo=<?php echo $v['codigo']; ?>">
 						Remover
 					</a>
 				</td>
 			</tr>
 			<?php
 					}
 				}
 			?>
 		</tbody>
 	</table>
 
 </body>
 </html>




