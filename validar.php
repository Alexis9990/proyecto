<?php
session_start();
require("conexion_bd.php");

$username=$_POST['correo'];
$pass=$_POST['contrasena'];

$sql=mysql_query("SELECT * FROM USUARIOS WHERE CORREO='$username'");
if($f=mysql_fetch_array($sql))
{
	if($pass==$f['PASSWORD'])
	{
		$_SESSION['user']=$f;
		header("Location: home.php");
	}

	else
	{
		echo '<script>alert("CONTRASENA INCORRECTA")</script>';
		echo "<script>location.href='index.php'</script>";
	}
}
else
{
		echo '<script>alert("ESTE USUARIO NO EXISTE")</script>';
		echo "<script>location.href='index.php'</script>";
}


?>
