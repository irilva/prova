<?php
include_once("../conexao.php");
$ra=$_POST['ra'];
$senha=$_POST['senha'];

$login=$conexao->query("SELECT ra,senha FROM aluno WHERE ra='$ra' AND senha=''")
  echo $ra,'',$senha '';


?> 