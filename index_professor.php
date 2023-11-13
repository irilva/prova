<?php
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Escola 3 Cavaleiros</title>
</head>
<body>
    <form action="login/professor.php" method="post">
    <div class="mb-3">
<label for="cpf" class="cpf">CPF:</label>
<input type="text" class="cpf" id="cpf" aria-describedby="cpf"> </br> </br>
<label for="nome" class="nome">Nome:</label>
<input type="text" class="nome" id="nome" aria-describedby="nome"> </br> </br>
<label for="email" class="email">Email:</label>
<input type="text" class="email" id="email" aria-describedby="email"> </br> </br>
<label for="disciplina" class="disciplina">Disciplina:</label>
<input type="text" class="discilplina" id="disciplina" aria-describedby="disciplina"> </br> </br>
<label for="senha" class="senha">Senha:</label>
<input type="text" class="senha" id="senha" aria-describedby="senha"> </br> </br>
<label for="confirmarsenha" class="confirmarsenha">Confirmar Senha:</label>
<input type="text" class="confirmarsenha" id="confirmarsenha" aria-describedby="confirmarsenha"> </br> </br>
      <a href="/login/professor.php"> <button type="button" class="btn btn-primary">Registrar</button> </a>
</div>
</form>   
</body>
</html>