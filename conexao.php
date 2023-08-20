<?php
$servidor = "mysql:host=localhost;port=3306";
$usuario = "root";
$senha = "root";
$dbname = "banco_php";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
