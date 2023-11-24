<?php
  if(isset($_POST['usuario'])){
    $user = $_POST['usuario'];
    $rm =$_POST['numeromatricula'];
    $curso =$_POST ['curso'];
    setcookie("usuario",$user);
    setcookie("numeromatricula", $rm);
    setcookie("curso",$curso);
    $mensagem ="Usuário $user conectado<br> Da matricula $rm <br> Estudante do curso  de $curso<br>";
  }else{
    $mensagem = "Digite o seu nome ";
  }
?>

