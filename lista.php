<?php 


require_once ("config.php");

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	

});

$app->run();

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
                    <li><a class="menu-principal__item" href="Cadastro.php">Cadastro</a></li>
                    <li><a class="menu-principal__item menu-principal__item--atual" href="Lista.php">Registro</a></li>
                    </ul>
        </nav>
    </header>


  
  <body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Relatório de <b>Cadastros</b></h2>
					</div>
					
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        
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

                </br>

 			<?php
 				if(is_array($lista) && count($lista))
 				{
 					foreach($lista as $k => $v)
 					{ 						
 			?>
 			<tr> <!-- Puxa informações da tabela no banco de dados-->
 				
 				<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
				</td>


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