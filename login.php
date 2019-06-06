<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Ayudami</title>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="index.php">
            <img id="logo" src="images/logos/logo-ayudami.svg" alt="Ayudami" data-no-retina />
          </a>
        </div>
        <div class="col-md-5 offset-md-3 text-right">
          <a href="tel:0180002456913" class="phone">
            018000-2456-913
          </a>
        </div>
      </div>
    </div>
  </header>
    <div class="container-formulario">
      <form action="conexion.php" method="post">
        <h1>Iniciar Sesión</h1>
        <br>
        <div class="form-group">
          <label>Usuario</label>
          <input name="usuario" type="text" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label>Contraseña</label>
          <input name="contrasena" type="password" class="form-control" required="required">
        </div>
        <div class="button-container">
          <button id="boton3" name="boton3" href="area_usuarios.php" type="submit" class="submit-cta pull-center">Ingresar</button>
          <br>
          <label class="checkbox-inline pull-left remember-me"><input type="checkbox">Recordarme </label>
        </div>
        <div><a style="padding-left:4px" href="#"> ¿No puedes acceder a tu cuenta?</a></div>
      </form>
    </div>
  </body>
</html>
