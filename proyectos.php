<?php
session_start();
if(@!$_SESSION['user'])
{
	header("Location:index.php");
}
?>

<html lang="en">
<head>
	<title>Proyectos</title>
	<link rel="icon" type="image/png" href="css/images/favicon.png"/>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/sidebar.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

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
					<li class="active"><a href="proyectos.php">Proyectos<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a></li>

					<li><a href="empleados.php">Empleados<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-knight"></span></a></li>

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
				?>, estos son nuestros proyectos en desarrollo</p>
			</div>


			<!-- Trigger the modal with a button -->
			<div class="lista_proyectos">
				<button class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal" id="verproyecto">Ver proyecto</button>
			</div>

			<div class="lista_proyectos2">
				<button class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal2" id="verproyecto">Ver proyecto</button>
			</div>

			<div class="lista_proyectos3">
				<button class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal3" id="verproyecto">Ver proyecto</button>
			</div>
			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Aplicacion para Android de IGN</h4>
						</div>
						<div class="modal-body">
							<p>
								Se desarrollara un aplicacion para Android de IGN en la que se podran visualizar todas las secciones con las
								que cuenta la version web de IGN como ver noticias, articulos, trailers, y diferente contenido.
								<br/><br/>Ademas de que los
								usuario podran crear una cuenta, iniciar sesion y participar comentando en las publicaciones y en los foros.
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
							<h4 class="modal-title">Pagina Web de Uncharted 4</h4>
						</div>
						<div class="modal-body">
							<p>
								Se desarrollara una pagina web publicitaria para el juego de Uncharted 4, la cual contara con un buen aspecto visual usando
								animaciones, contendra toda la informacion sobre el videojuego y sera completamente responsiva.
								<br/><br/>El usuario podra
								descargar distintos wallpapers oficiales del juego, los cuales deberan estar almacenados en el servidor.
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
							<h4 class="modal-title">Aplicacion para iOS de los Juegos Olimpicos 2016</h4>
						</div>
						<div class="modal-body">
							<p>
								Se desarrollara la aplicacion oficial de los Juegos Olimpicos Rio 2016 para iOS.
								<br/><br/>Antes de ser el evento se podra ver un contador
								en tiempo real dira cuanto falta para que sea el evento, y ademas se podran ver las ultimas novedades relacionadas con
								el mismo.
								<br>Una vez que inicie el evento se podran ver las fechas y horas de los eventos, los puntajes, los ganadores de
								medallas, estadisticas y demas informacion que acontece en el evento.
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sidebar.js"></script>
</body>

</html>
