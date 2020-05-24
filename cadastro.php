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
                    <li><a class="menu-principal__item menu-principal__item--atual" href="cadastro.php">Cadastro</a></li>                   
                    <li><a class="menu-principal__item" href="lista.php">Registro</a></li>
                    </ul>
        </nav>
    </header>

 
 <body>

<div class="form-style-2">
<div class="form-style-2-heading">Dados Para Cadastro</div>
<form action="cadastrar.php" method="post">
	<label for="categorias_codigo"><span>Categoria <span class="required">*</span></span><input type="text" id="categorias_codigo" name="categorias_codigo" value="<?php echo $lista[0]['categorias_codigo']; ?>" class = "input-field" /></label>
<label for="nome"><span>Nome <span class="required">*</span></span><input type="text" id="nome" name="nome" value="<?php echo $lista[0]['nome']; ?>" class = "input-field" /></label>
<label for="email"><span>Email <span class="required">*</span></span><input type="text" class="input-field" name="email" value="<?php echo $lista[0]['email']; ?>" id = "email" /></label>
<label for="endereco"><span>Endereço <span class="required">*</span></span><input type="text" class="input-field" name="endereco" value="<?php echo $lista[0]['endereco']; ?>" id = "endereco"  /></label>
<label><span>Telefone</span><input type="text" class="tel-number-field1" name="telefone" value="<?php echo $lista[0]['telefone']; ?>" maxlength="2" />-<input type="text" class="tel-number-field2" name="telefone" value="<?php echo $lista[0]['telefone']; ?>" maxlength="10" id = "telefone"  /></label>
<label><span>Celular</span><input type="text" class="tel-number-field1" name="celular" value="<?php echo $lista[0]['celular']; ?>" maxlength="2" />-<input type="text" class="tel-number-field2" name="celular" value="<?php echo $lista[0]['celular']; ?>" maxlength="10" id ="celular"  /></label>
<label for="cidade"><span>Cidade <span class="required">*</span></span><input type="text" class="input-field" name="cidade" value="<?php echo $lista[0]['cidade']; ?>" id= "cidade" /></label>
<label><span>Estado<span class="required">*</span></span><input type="text" class="tel-number-field1" name="estado" value="<?php echo $lista[0]['estado']; ?>" maxlength="2" id = "estado"/></label>
<label for="foto"><span>Foto <span ></span></span><input type="text" class="input-field" name="foto" value="<?php echo $lista[0]['foto']; ?>" id= "foto" /></label>
<label for="data_nascimento"><span>Data de Nascimento</label></span>
<input id="data_nascimento" type="text" class="input-field" placeholder="Ex.: dd/mm/aaaa" data-mask="00/00/0000" maxlength="8" autocomplete="off" name="data_nascimento" value="<?php echo $lista[0]['data_nascimento']; ?>" id= "data_nascimento"></label>
</br>
<!--<label for="field4"><span>Regarding</span><select name="field4" class="select-field">-->

<option value="General Question"></option>
<option value="Advertise"></option>
<option value="Partnership"></option>
</select></label>

<label for="observacoes"><span>Observações <span class="required">*</span></span><textarea name="observacoes" class="textarea-field" id= "observacoes" value="<?php echo $lista[0]['observacoes']; ?>" ></textarea></label>

<label><span> </span><input type="submit" value="Enviar" /></label>
</form>
</div>


 
 </body>
 </html>

