<?php 
require_once ("config.php");

$cadastro = new contatos();

$categoriasCodigo = filter_input(INPUT_POST, "categorias_codigo");
$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$endereco = filter_input(INPUT_POST, "endereco");
$telefone = filter_input(INPUT_POST, "telefone");
$celular = filter_input(INPUT_POST, "celular");
$cidade = filter_input(INPUT_POST, "cidade");
$estado = filter_input(INPUT_POST, "estado");
$foto = filter_input(INPUT_POST, "foto");
$dataNascimento = filter_input(INPUT_POST, "data_nascimento");
$observacoes = filter_input(INPUT_POST, "observacoes");

//date - 18/05/2020

$cadastro->setCategoriasCodigo($categoriasCodigo);
$cadastro->setNome($nome);
$cadastro->setEmail($email);
$cadastro->setEndereco($endereco);
$cadastro->setTelefone($telefone);
$cadastro->setCelular($celular);
$cadastro->setCidade($cidade);
$cadastro->setEstado($estado);
$cadastro->setFoto($foto);
$cadastro->setDataNascimento($dataNascimento);
$cadastro->setObservacoes($observacoes);

$cadastro->insert();



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




<h1>
	<?php 

	if($cadastro != "0")

		echo "Cadastro realizado com sucesso!";
	else
		echo "Erro ao realizar cadastro!";

	 ?>
	

</h1>
</html>