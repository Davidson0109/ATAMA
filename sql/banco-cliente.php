<?php

function inserir($conexao, $nome, $email, $senha, $cpf, $telefone, $genero, $dataNascimento){
	$sql="insert into usuarios(nome, email, idade) values('$nome','$email','$senha','$cpf','$telefone','$genero','$dataNascimento');";
	return mysqli_query($conexao,$sql);
	
}
function alterar($conexao, $nome, $email, $senha, $cpf, $telefone, $genero, $dataNascimento){
	$sql = "update usuarios set nome='$nome',email='$email',senha='$senha',cpf='$cpf',telefone='$telefone',genero='$genero',dataNascimento='$dataNascimento', where idUsuario=$idUsuario";
	return mysqli_query($conexao,$sql);
}

function excluir($conexao,$idUsuario){
	$sql = "delete from usuarios where idUsuario = $idUsuario";
	return mysqli_query($conexao,$sql);
}

function listarClientes($conexao){
	$usuarios = array();
	$sql = "select * from usuarios";
	$resultado =  mysqli_query($conexao,$sql);
	
	while($usuario=mysqli_fetch_assoc($resultado)){
		array_push($usuarios,$usuario);
	}
	return $usuarios;
}


function buscarCliente($conexao,$idUsuario){
	$sql = "select * from usuarios where idUsuario = $idUsuario";
	$resultado = mysqli_query($conexao,$sql);
	return mysqli_fetch_assoc($resultado);
}
?>