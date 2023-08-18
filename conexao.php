<?php
$servidor = "10.217.0.65:3306";
$usuario = "root";
$senha = "password";
$dbname = "banco_php";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
