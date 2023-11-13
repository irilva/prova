<?php
include_once("./conexao.php");
$cpf=$_post['cpf'];
$nome=$_post['nome'];
$disciplina=$_post['disciplina'];
$email=$_post['email'];
$senha=$_post['senha'];

try{
$update=$conexao->prepare("UPDATE professor SET nome=:nome,email=:email,disciplica=:disciplina,senha=:senha, WHERE cpf=:cpf");

}catch(Exception $e){
    echo $e->getMessage();
}
?>   