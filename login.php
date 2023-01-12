
<?php

include("conexion.php");

$nombre = $_POST["usuario"];
$pass = $_POST["pass"];
if(isset ($_POST["btningresar"]))
{
session_start();
	$query=mysqli_query($conn,"SELECT * FROM login WHERE usuario= '$nombre' AND password = '$pass'");
	$nr = mysqli_num_rows($query);
	if($nr==1)
	{
		echo"<script> alert('Bienvenido $nombre'); window.location='IH-Arming-Outfit.html' </script>";
	}
	else{
		echo"<script> alert('Usuario no existe'); window.location='IH-Arming-Outfit-Login.html'</script>";
	}
}
?>