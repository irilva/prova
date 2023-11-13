<?php
include_once('conexao.php');
$cpf=$_POST('cpf');
$nome=$_POST('nome');
$email=$_POST('email');
$disciplina=$_POST('disciplina');
$senha=hash("sha512",$_POST['senha']);
$confirmarsenha=hash("sha512",$_POST['confirmarsenha']);

if($senha=$confirmarSenha){
$inserir=$conexao->prepare('INSERT INT professor(cpf, nome, email, disciplina, senha) VALUES (:cpf,:nome,:email,:disciplina,:senha)');

}else{
   header('colation:../login/index_professor.php');
}

?>