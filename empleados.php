<?php
session_start();
if(@!$_SESSION['user'])
{
	header("Location:index.php");
}
?>

<html lang="en">
<head>
	<title>Empleados</title>
	<link rel="icon" type="image/png" href="css/images/favicon.png"/>

	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/sidebar.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/slider.css" rel="stylesheet">

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="generator" content="Bootply" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>

	<nav class="navbar navbar-inverse sidebar" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="logout.php" class="btn btn-primary pull-center">Cerrar Sesión</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="#"><img src="css/images/cgg_logo.jpg" WIDTH=165 HEIGHT=85></a>
					</li>
					<li><a href="home.php">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
					<li><a href="perfil.php">Perfil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
					<li><a href="proyectos.php">Proyectos<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a></li>

					<li class="active"><a href="empleados.php">Empleados<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-knight"></span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="main">
		<!-- Content Here -->

		<div class="row">

			<div class="encabezado">
				<p>
					<?php
						echo $_SESSION['user']['USUARIO'];
					?>, estos son los miembros del equipo.
				</p>
			</div>
		</div>
			<div class="row">
  		<div class="col-sm-4">
				<div align="center"> <button class="img-circle img-responsive" data-toggle="modal" data-target="#myModal" id="verproyecto"> <img alt="User Pic" src="css/images/elalan.jpg" class="img-circle img-responsive"></button> </div>
			</div>
			<div class="col-sm-4">
				<div align="center"> <button class="img-circle img-responsive" data-toggle="modal" data-target="#myModal2" id="verproyecto">  <img alt="User Pic" src="css/images/elramiro.jpg" class="img-circle img-responsive"></button> </div>
			</div>
			<div class="col-sm-4">
				<div align="center"> <button class="img-circle img-responsive" data-toggle="modal" data-target="#myModal3" id="verproyecto">  <img alt="User Pic" src="css/images/elmanco.jpg" class="img-circle img-responsive"></button> </div>
			</div>
		</div>

		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Alan Jafet Gonzalez Morales</h4>
					</div>
					<div class="modal-body">
						<p>
							Programador, gamer y fisicoculturista, co-fundador de la empresa que actualmente dirige personalmente el proyecto de IGN
							<br/><br/>"Yo creo que Sasha Grey no se debió haber retirado" -Alan durante una conversación casual en la oficina.
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>

		<div id="myModal2" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Ramiro Garcilazo Lara</h4>
					</div>
					<div class="modal-body">
						<p>
							Genio, billonario, playboy, filántropo. Co-fundador y actual CEO, también se dedica a salvar el mundo como Ramiro Man
							<br/><br/>"No offense but I don't play well with others" -Ramiro en una discusión con un compañero de equipo.
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>

		<div id="myModal3" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Daniel Aurelio "El Compadre" Cruz Govea</h4>
					</div>
					<div class="modal-body">
						<p>
							El tercer co-fundador, se especializa en PHP, aunque actualmente trabaja más lento debido a que una lesión jugando basquet lo dejó manco, aún es un programador eficiente
							<br/><br/>"Demontres, no debí haber ido al Colomos ese día" -El Compadre en el hospital después de lastimarse
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>





	</div>






	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sidebar.js"></script>
	<script src="js/slider.js"></script>
</body>

</html>
