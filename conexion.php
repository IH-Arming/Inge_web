<?php

$dbhost = "sql10.freesqldatabase.com";
$dbuser = "sql10590039";
$dbpass = "jF8mKjCkhv";
$dbname = "sql10590039";

$conn =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
	die("No hay conexion:".mysqli_connect_error());
}

?>