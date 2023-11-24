<?php
//salva o arquivo como "lista-cliente" (sem aspas);
include("conexao.php");
include("banco-cliente.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de Usuários</title>
	</head>
	<body>
		<h1>Usuários Cadastrados</h1>
		<h2>Menu</h2><br>
		<a href="index.php">Novo cadastro</a>
		<table>
			<tr>
			    <td>Alterar</td>
			    <td>Excluir</td>
				<td>Id</td>
				<td>Nome</td>
				<td>Email</td>
				<td>Idade</td>
				
			</tr>
			<?php
			$usuarios = listarClientes($conexao);
			foreach ($usuarios as $usuario):
			?>
			<tr>
			    <td><a href="alterar-cliente.php?idUsuario=<?php echo $usuario['idUsuario']?>">Alterar</td>
			    <td><a href="excluir-cliente.php?idUsuario=<?php echo $usuario['idUsuario']?>">Excluir</td>
				<td><?php echo $usuario['idUsuario']?></td>
				<td><?php echo $usuario['nome']?></td>
				<td><?php echo $usuario['cpf']?></td>
				<td><?php echo $usuario['email']?></td>
				<td><?php echo $usuario['senha']?></td>
				<td><?php echo $usuario['telefone']?></td>
				<td><?php echo $usuario['genero']?></td>
				<td><?php echo $usuario['dataNascimento']?></td>
				
			</tr>
			<?php
			endforeach;
			?>
		</table>
	</body>
</html>