<?php
include_once('conexao.php');
?>
<?php
include_once('partials/header.php');
?>

<div class="container">
    <h1>Lista de Professores</h1>
    <table class="table">
        <tr>
            <th scape="col">CPF</th>
            <th scape="col">Nome</th>
            <th scape="col">Email</th>
            <th scape="col">Disciplina</th>
        </tr>
        <?php
        $select= $conexao->query("SELECT nome,email,disciplina FROM professor WHERE cpf=$cpf");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
        <td>{$linha['cpf']}<td/> 
        <td>{$linha['nome']}<td/>
        <td>{$linha['email']}<td/>
        <td>{$linha['disciplina']}<td/>
        <td>
        <a href='editar_professor.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
        <a href='deletar.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>delete</span></a>

        <td/>
        </tr>";
           }
           ?>
           <a href="index_professor.php">Adicionar Professor</a>
        </table>
        </div>
        </body>
        </html>
        <?php
        include_once("partials/footer.php");
        ?>
            