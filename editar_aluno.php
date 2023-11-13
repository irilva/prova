<?php
include_once("./partials/header.php");

include_once('conexao.php');

if(issent($_GET['ra'])){
   $ra=$_GET('ra');
}else{
   header('location:ver_aluno.php');
}
?> 

   <div class="container">
    <form action="atualizar_aluno.php" method="post">
     <?php
   $select=$conexao->query("SELECT nome,email,turma FROM aluno Where ra=$ra");
     while($linha=$select->fetch(FETCH_ASSOC)){
       echo"";
      
     }