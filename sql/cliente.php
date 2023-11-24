<!--salva o arquivo como "cliente" (sem aspas);-->
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1> Cadastro de clientes</h1>
<form method="post" action="processamento-cliente.php">
Nome: <input type="text" name="nome"><br>
CPF: <input type="text" name="cpf"><br>
Email: <input type="text" name="email"><br>
Senha: <input type="text" name="senha"><br>
Telefone: <input type="text" name="telefone"><br>
Gênero: <input type="text" name="genero"><br>
Data de Nascimento: <input type="text" name="dataNascimento"><br>
<input type="submit" value="Cadastrar" name="btn"><br>
</form>
<a href="lista-clientes.php">Listar clientes</a>
</body>
</html>