<?php
session_start();
require("conexion_bd.php");
if(@!$_SESSION['user'])
{
	header("Location:index.php");
}
if(!empty($_POST)){
  var_dump($_POST);
  $query = "UPDATE usuarios SET USUARIO = '{$_POST['username']}', PASSWORD = '{$_POST['password']}', CORREO = '{$_POST['email']}', TELEFONO = {$_POST['phone']}";
  if($link->query($query) === TRUE)
    echo "Data updated";
  else
    echo "Fuck";
}
?>

<html lang="en">
<head>
    <title>Perfil</title>
    <link rel="icon" type="image/png" href="css/images/favicon.png"/>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body style="overflow-x: hidden;">

no sirvio 
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/profile.js"></script>
</body>

</html>
