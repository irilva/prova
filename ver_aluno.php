<?php
include_once('conexao.php');
?>
<?php
include_once('partials/header.php');
?>

<div class="container">
    <h1>Lista de Alunos</h1>
    <table class="table">
        <tr>
            <th scape="col">RA</th>
            <th scape="col">Nome</th>
            <th scape="col">Email</th>
            <th scape="col">Turma</th>
        </tr>
        <?php
        $select= $conexao->query("SELECT nome,email,turma FROM aluno WHERE ra=$ra");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
        <td>{$linha['ra']}<td/> 
        <td>{$linha['nome']}<td/>
        <td>{$linha['email']}<td/>
        <td>{$linha['turma']}<td/>
        <td>
        <a href='editar_aluno.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
        <a href='deletar_aluno.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>

        <td/>
        </tr>";
           }
           ?>
           <a href="index_aluno.php">Adicionar Alunos</a>
        </table>
        </div>
        </body>

        </html>
        <?php
        include_once("index_aluno.php");
        include_once("partials/footer.php");
        ?>
            