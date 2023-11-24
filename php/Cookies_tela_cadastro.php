<?php
    if(isset($_POST['register_form'])){
    $nome = $_POST['nome'];
      setcookie("usuario",$user);
    
    $CPF =$_POST['cpf'];
      setcookie("cpf",$CPF);
      
    $email =$_POST ['email'];
      setcookie("email",$email);
      
    $senha = $_POST['senha'];
      setcookie("senha",$senha);
      
    $telefone =$_POST['telefone'];
      setcookie("telefone",$telefone);
      
    $genero =$_POST['genero'];
      setcookie("genero",$genero);
      
    $nascimento =$_POST ['nascimento'];
      setcookie("nascimento",$nascimento);
      
    $mensagem ="Usuário $user conectado<br> Da matricula $rm <br> Estudante do curso  de $curso<br>";
      
  }
  
  else{
    $mensagem = "Digite o seu nome ";
  }

  if(count($_COOKIE) >0) {
    echo "Cookies existem.";

  }

  else { 
    echo "Não tem cookie.";
  }
?>