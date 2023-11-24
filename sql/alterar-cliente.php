<?php

include("conexao.php");
include("banco-cliente.php");

$idUsuario = $_GET['idUsuario'];
$usuario = buscarCliente($conexao, $idUsuario);

?>

<html>
	<head>
		<meta charset="UTF-8">
		<title> Alterar Usuario</title>
	</head>
	
	<body>
	<h1> Alterar Usuario</h1>
	
	<form method="post" action="verifica-alteracao.php">
		<input type="hidden" name="idUsuario" value="<?php echo $usuario['idUsuario']?>"><br>
		Nome: <input type="text" name="nome"><br>
		CPF: <input type="text" name="cpf"><br>
		Email: <input type="text" name="email"><br>
		Senha: <input type="text" name="senha"><br>
		Telefone: <input type="text" name="telefone"><br>
		Gênero: <input type="text" name="genero"><br>
		Data de Nascimento: <input type="text" name="dataNascimento"><br>
		<input type="submit" value="Alterar" name="btnAlterar"><br>
		</form>
		</body>
</html>