<?php

include("conexion.php");

$nombre = $_POST["usuario"];
$pass = $_POST["pass"];
$day= $_POST["day"];
$phone =$_POST["phone"];
$address =$_POST["address"];
$email =$_POST["email"];
//Registrar

if(isset ($_POST["btnregistrar"]))
{
	$sqlgrabar= "INSERT INTO login(usuario,password,direccion,telefono,email,fecha) values ('$nombre','$pass','$address','$phone','$email','$day')";
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo"<script> alert('Usuario registrado con exito: $nombre'); window.location='IH-Arming-Outfit-Home.html'</script>";
	}
	else
	{
		echo"Error: ",$sql."<br>".mysql_error($conn);
	}

}
?>