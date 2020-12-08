<?php
session_start();
require("conexion_bd.php");
if(@!$_SESSION['user'])
{
	header("Location:index.php");
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
                    <li class="active"><a href="perfil.php">Perfil<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
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
                <p>Tu perfil, 				<?php
													echo $_SESSION['user']['USUARIO'];
												?></p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">


                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
																	<?php
																	echo $_SESSION['user']['USUARIO']." ";
																	echo $_SESSION['user']['Ape_P']." ";
																	echo $_SESSION['user']['Ape_M'];


																	?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="css/images/empleado.png" class="img-circle img-responsive"> </div>

                                    <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                                    <div class=" col-md-9 col-lg-9 ">
                                        <table class="table table-user-information">
                                            <tbody>
                                                <tr>
                                                    <td>Departamento:</td>
                                                    <td>
																											<?php
																												$esp= mysql_query("SELECT Nomb_Esp FROM especialidad WHERE No_Especialidad = {$_SESSION['user']['No_Especialidad']}");
																												$e = mysql_fetch_array($esp);
																												echo $e[0];
																											?>
																										</td>
                                                </tr>
                                                <tr>
                                                    <td>Telefono:</td>
                                                    <td>
																											<?php
																												echo $_SESSION['user']['Telefono'];
																											 ?>
																										</td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha de nacimiento:</td>
                                                    <td>12/02/1998</td>
                                                </tr>

                                                <tr>
                                                    <tr>
                                                        <td>Genero:</td>
                                                        <td>

																														<?php
																															echo $_SESSION['user']['Genero'];
																														 ?>
																												</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Salario:</td>
                                                        <td>
																													<?php
																														echo $_SESSION['user']['Salario'];
																													 ?>
																												</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Correo electronico:</td>
                                                        <td>
																													<?php
																														echo $_SESSION['user']['CORREO'];
																													 ?>
																												</td>

                                            </tbody>
                                        </table>
                                        <a href="proyectos.php" class="btn btn-primary pull-center">¿En qué estoy trabajando?</a>
                                        <!--a href="#" class="btn btn-primary">Team Sales Performance</a-->
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="mailto:a13300130@live.ceti.com" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary" style="visibility:hidden"></a>
                                <span class="pull-right">
                            <a href="edit.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/profile.js"></script>
</body>

</html>
