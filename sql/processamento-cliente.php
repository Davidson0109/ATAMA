<?php
//salva o arquivo como "processamento-cliente" (sem aspas);
include("conexao.php");
include("banco-cliente.php");
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];
$genero=$_POST['genero'];
$dataNascimento=$_POST['dataNascimento'];

if(inserir($conexao, $nome, $email, $senha, $cpf, $telefone, $genero, $dataNascimento)){
    
	echo "cadastrado <br>";
}
else{
	echo "erro ao cadastrar<br>";
}
?>