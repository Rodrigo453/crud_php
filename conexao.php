<?php
$dbhost     = getenv('MYSQL_DB_HOST');
$dbport     = getenv('MYSQL_PORT');
$dbname     = getenv('MYSQL_DB_NAME');
$dbusername = getenv('MYSQL_USERNAME');
$dbpassword = getenv('MYSQL_PASSWORD');
$mysqli = "mysql:host=".$dbhost.";port=".$dbport.";dbname=".$dbname;

if(!$mysqli)
{
  echo("Não conectado");
}
else
{
  echo("Conectado");
}
?>
