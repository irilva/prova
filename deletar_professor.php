<?php
include_once("conexao.php");
if(isset($_GET["cpf"])){
$cpf=$_GET["cpf"];
}else{
    header("location:ver_professor.php");
}
try{
$deletar=$conexao->query("DELETE FROM professor WHERE cpf=$cpf;");
header("location:ver_professor.php");
}catch(Exception $e){
    echo $e->getMessage();
}

