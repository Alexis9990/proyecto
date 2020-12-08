<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Inicio de sesion</title>
		<link rel="icon" type="image/png" href="css/images/favicon.png"/>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style_login.css" rel="stylesheet">
	</head>
	<body>

<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">Ingresar</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="validar.php" method="POST">
            <div class="form-group">
              <input type="email" name="correo" class="form-control input-lg" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" name="contrasena" class="form-control input-lg" placeholder="Contraseña" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Ingresar" name="validar.php">
            <span><a href="manualUsuario.pdf" target="_blank">Manual de Usuario</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">

      </div>
  </div>
  </div>
</div>

		<script src="js/jquery-2.2.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
