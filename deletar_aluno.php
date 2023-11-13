<?php
include_once("conexao.php");
if(isset($_GET["ra"])){
$cpf=$_GET["ra"];
}else{
    header("location:ver_aluno.php");
}
try{
$deletar=$conexao->query("DELETE FROM aluno WHERE ra=$ra;");
header("location:ver_aluno.php");
}catch(Exception $e){
    echo $e->getMessage();
}

