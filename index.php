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
//$search = Contatos::search("Ic");
//echo json_encode($search);

/*$cadastro = new contatos();

$cadastro->setCategoriasCodigo(1000);
$cadastro->setNome("Naruto");
$cadastro->setEmail("naruto@konoha.com");
$cadastro->setEndereco("Topo do Predio SN");
$cadastro->setTelefone("55 5555 5555");
$cadastro->setCelular("55 99999 9999");
$cadastro->setCidade("Vila Secreta da Folha");
$cadastro->setEstado("PF");
$cadastro->setFoto("Sem Foto");
$cadastro->setDataNascimento("");
$cadastro->setObservacoes("Amigo da Kurama e pai do Boruto");


$cadastro->insert();

echo $cadastro;
============================================================================================*/

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


echo "---> ".filter_input(INPUT_GET, "nome");

$contatos = new contatos();

$lista = contatos::getList();

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Contato</title>
 </head>
 <strong>Teste Instar para Contratação</strong> 

 
 <body>


 	<form method="POST" action="cadastrar.php"> </br>
 		
 		<label for="categorias_codigo">Categoria:</label>
 			<input type="text" name="categorias_codigo" id="categorias_codigo" value="<?php echo $lista[0]['categorias_codigo']; ?>">

 		<label for="nome">Nome:</label>
 			<input type="text" name="nome" id="nome" value="<?php echo $lista[0]['nome']; ?>">

 		<label for="email">Email:</label>
 			<input type="text" name="email" id="email" value="<?php echo $lista[0]['email']; ?>"></br>

 		</br>

 		<label for="endereco">Endereço:</label>
 			<input type="text" name="endereco" id="endereco" value="<?php echo $lista[0]['endereco']; ?>">

 		<label for="telefone">Telefone:</label>
 			<input type="text" name="telefone" id="telefone" value="<?php echo $lista[0]['telefone']; ?>">

 		<label for="celular">Celular:</label>
 			<input type="text" name="celular" id="celular" value="<?php echo $lista[0]['celular']; ?>"></br>

 		</br>

 		<label for="cidade">Cidade:</label>
 			<input type="text" name="cidade" id="cidade" value="<?php echo $lista[0]['cidade']; ?>">

 		<label for="estado">Estado:</label>
 			<input type="text" name="estado" id="estado" value="<?php echo $lista[0]['estado']; ?>">

 		<label for="foto">Foto:</label>
 			<input type="text" name="foto" id="foto" value="<?php echo $lista[0]['foto']; ?>"> <br>

 		</br>

 		<label for="data_nascimento">Data de Nascimento:</label>
 			<input type="text" name="data_nascimento" id="data_nascimento" value="<?php echo $lista[0]['data_nascimento']; ?>">

 		<label for="observacoes">Observações:</label>
 			<input type="text" name="observacoes" id="observacoes" value="<?php echo $lista[0]['observacoes']; ?>">


 		<input type="submit" value="Enviar">

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
 
