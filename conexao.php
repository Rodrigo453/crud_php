<?php
$servidor = getenv("MYSQL_SERVICE_HOST");
$porta = getenv("MYSQL_SERVICE_PORT");
$usuario = getenv("databaseuser");
$senha = getenv("databasepassword");
$dbname = getenv("database");
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn)
{
  echo("Não conectado");
}
else
{
  echo("Conectado");
}
?>
