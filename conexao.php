<?php
$username="root";
$password=1234;
$dbname="escola";
$localhost="localhost";
$port=3307;

try {
  $conexao = new PDO("mysql:localhost=$localhost;port=$port;dbname=$escola; username=$username; password=$password");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexao feita com sucesso";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>         