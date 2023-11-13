<?php 
session_start();
if (isset($_SESSION['tipo'])){
    if($_SESSION['tipo']=! 1){
        header('location:../index_aluno.php');
    }
}else{
    header('location:../index_aluno.php');
}
include_once("../partials/header.php");
include_once("../componentes/navbar.php");
include_once("../conexao.php");
include_once("../../../ver_aluno.php");
?>
<?php 
include_once("partials/footer.php");
?>