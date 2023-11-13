<?php
include_once("./conexao.php");
$ra=$_post['ra'];
$nome=$_post['nome'];
$email=$_post['email'];
$turma=$_post['turma'];
$senha=$_post['senha'];

try{
$update=$conexao->prepare("UPDATE aluno SET nome=:nome,email=:email,turma=:turma,senha=:senha WHERE ra=:ra");

}catch(Exception $e){
    echo $e->getMessage();
}
?>   