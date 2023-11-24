<?php
//Salvar como "testaconexao" (sem aspas)

include("conexao.php");
if ($conexao){
	echo "Conexão criada";
}else{
	echo "Erro de conexão";
}
?>