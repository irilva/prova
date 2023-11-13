<?php
include_once("./partials/header.php");

include_once('conexao.php');

if(issent($_GET['cpf'])){
   $cpf=$_GET('cpf');
}else{
   header('location:ver_professor.php');
}
?> 

   <div class="container">
    <form action="atualizar_professor.php" method="post">
     <?php
   $select=$conexao->query("SELECT nome,email,disciplina FROM professor WHERE cpf=$cpf");
     while($linha=$select->fetch(FETCH_ASSOC)){
       echo"";
     }