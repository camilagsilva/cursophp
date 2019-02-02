<?php
//print_r($_POST);
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaconfirmacao= $_POST['senha-confirmacao'];

$foto = $_FILES['foto'];

if ($nome == ''){
  echo "insira seu nome";
} 
if ($email == ''){
  echo "insira seu email";
} 

if ($senha == ''){
  echo "insira sua senha";
} 

  if ($senhadeconfirmacao == ''){
  echo "preencha esse campo";
} 

if ($foto == ''){
  echo "coloque uma foto";
} 

?>



