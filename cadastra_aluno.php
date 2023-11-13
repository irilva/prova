<?php
include_once('conexao.php');
$ra=$_POST('ra');
$nome=$_POST('nome');
$email=$_POST('email');
$turma=$_POST('turma');
$senha=hash("sha512",$_POST['senha']);
$confirmarsenha=hash("sha512",$_POST['confirmarsenha']);

if($senha=$confirmarSenha){
$inserir=$conexao->prepare('INSERT INT aluno (ra, nome, email, senha, turma) VALUES (:ra,:nome,:email,:senha,:senha,:turma)');

}else{
   header('colation:../login/index_aluno.php');
}

?>