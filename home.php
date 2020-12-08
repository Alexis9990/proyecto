<?php
session_start();
if(@!$_SESSION['user'])
{
	header("Location:index.php");
}
?>

<html lang="en">
<head>
	<title>Inicio</title>
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
					<li class="active"><a href="home.php">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
					<li><a href="perfil.php">Perfil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
					<li><a href="proyectos.php">Proyectos<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a></li>

					<li><a href="empleados.php">Empleados<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-knight"></span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="main">
		<!-- Content Here -->

		<div class="row">

			<div class="encabezado">
				<p>Bienvenido
					<?php
						echo $_SESSION['user']['USUARIO'];
					?>
				</p>
			</div>

			<br/>
			<br/>
			<br/>

			<div id="myCarousel" class="carousel slide" data-ride="carousel">

				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<div class="item active">
						<img src="css/images/slider1.jpg">
					</div>
					<!-- End Item -->

					<div class="item">
						<img src="css/images/slider2.jpg">
					</div>
					<!-- End Item -->

					<div class="item">
						<img src="css/images/slider3.jpg">
					</div>
					<!-- End Item -->

					<div class="item">
						<img src="css/images/slider4.jpg">
					</div>
					<!-- End Item -->

				</div>
				<!-- End Carousel Inner -->


				<ul class="nav nav-pills nav-justified">
					<li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">Vision<small>Siempre viendo hacia adelante</small></a></li>
					<li data-target="#myCarousel" data-slide-to="1"><a href="#">Ganadores CRM<small>Premio al mejor CRM 2016</small></a></li>
					<li data-target="#myCarousel" data-slide-to="2"><a href="#">Valores<small>La calidad es prioridad</small></a></li>
					<li data-target="#myCarousel" data-slide-to="3"><a href="#">Felicidades!<small>Feliz dia del padre</small></a></li>
				</ul>

			</div>
			<!-- End Carousel -->
		</div>
	</div>



	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sidebar.js"></script>
	<script src="js/slider.js"></script>
</body>

</html>
