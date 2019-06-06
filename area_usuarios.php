<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Ayudami Usuarios</title>
  </head>
  <body>
    <?php
    session_start();
    $nombre = $_SESSION['username'];
    echo '<h1 id="titulo-usuario">Gestión de '.$nombre.'</h1>'
    ?>
    <br>
    <section>
  		<div class="page">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-12">
                <table id="table" cellpadding="0" cellspacing="0">
                  <thead>
                    <tr>
                      <td>Documento de Identidad</td>
                      <td>Edad</td>
                      <td>Correo</td>
                      <td>Victimario</td>
                      <td>Caso</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // require 'conexion.php';
                    // $query = "SELECT DISTINCT cedula, edad, correo, tipo,entidad
                    // FROM cliente, formulario";
                    // //INNER JOIN formulario ON formulario
                    // $consulta = $enlace->query($query);
                    // if(mysqli_num_rows($consulta) > 0 ){
                    //   while($fila = mysqli_fetch_array($consulta)) {
                    //     echo '<tr>
                    //     <td>'.$fila['cedula'].'</td>
                    //     <td>'.$fila['edad'].'</td>
                    //     <td>'.$fila['correo'].'</td>
                    //     <td>'.$fila['tipo'].'</td>
                    //     <td>'.$fila['entidad'].'</td>
                    //     </tr>';
                    //   }
                    // }

                    if ($_SESSION['username'] == "Documento Especial") {
                      require 'conexion.php';
                      $query = ("SELECT cedula, edad, correo, persona, tipo
                        FROM formulario
                        WHERE formulario.entidad = 'Documento Especial' ");
                        $consulta = $enlace->query($query);
                        if(mysqli_num_rows($consulta) > 0 ){
                          while($fila = mysqli_fetch_array($consulta)) {
                            echo '<tr>
                            <td>'.$fila['cedula'].'</td>
                            <td>'.$fila['edad'].'</td>
                            <td>'.$fila['correo'].'</td>
                            <td>'.$fila['persona'].'</td>
                            <td>'.$fila['tipo'].'</td>
                            </tr>';
                          }
                        }
                      }

                      if ($_SESSION['username'] == "Policia Nacional") {
                        require 'conexion.php';
                        $query = ("SELECT cedula, edad, correo, persona, tipo
                        FROM formulario
                        WHERE formulario.entidad = 'Policia Nacional' ");
                        $consulta = $enlace->query($query);
                        if(mysqli_num_rows($consulta) > 0 ){
                          while($fila = mysqli_fetch_array($consulta)) {
                            echo '<tr>
                              <td>'.$fila['cedula'].'</td>
                              <td>'.$fila['edad'].'</td>
                              <td>'.$fila['correo'].'</td>
                              <td>'.$fila['persona'].'</td>
                              <td>'.$fila['tipo'].'</td>
                            </tr>';
                          }
                        }
                      }

                      if ($_SESSION['username'] == "Fundacion Amigable") {
                        require 'conexion.php';
                        $query = ("SELECT cedula, edad, correo, persona, tipo
                        FROM formulario
                        WHERE formulario.entidad = 'Fundacion Amigable' ");
                        $consulta = $enlace->query($query);
                        if(mysqli_num_rows($consulta) > 0 ){
                          while($fila = mysqli_fetch_array($consulta)) {
                            echo '<tr>
                              <td>'.$fila['cedula'].'</td>
                              <td>'.$fila['edad'].'</td>
                              <td>'.$fila['correo'].'</td>
                              <td>'.$fila['persona'].'</td>
                              <td>'.$fila['tipo'].'</td>
                            </tr>';
                          }
                        }
                      }

                      if ($_SESSION['username'] == "Sin Saber") {
                        require 'conexion.php';
                        $query = ("SELECT cedula, edad, correo, persona, tipo
                        FROM formulario
                        WHERE formulario.entidad = 'No se' ");
                        $consulta = $enlace->query($query);
                        if(mysqli_num_rows($consulta) > 0 ){
                          while($fila = mysqli_fetch_array($consulta)) {
                            echo '<tr>
                              <td>'.$fila['cedula'].'</td>
                              <td>'.$fila['edad'].'</td>
                              <td>'.$fila['correo'].'</td>
                              <td>'.$fila['persona'].'</td>
                              <td>'.$fila['tipo'].'</td>
                            </tr>';
                          }
                        }
                      }

                      if ($_SESSION['username'] == "General") {
                        require 'conexion.php';
                        $query = ("SELECT cedula, edad, correo, persona, tipo
                        FROM formulario");
                        $consulta = $enlace->query($query);
                        if(mysqli_num_rows($consulta) > 0 ){
                          while($fila = mysqli_fetch_array($consulta)) {
                            echo '<tr>
                              <td>'.$fila['cedula'].'</td>
                              <td>'.$fila['edad'].'</td>
                              <td>'.$fila['correo'].'</td>
                              <td>'.$fila['persona'].'</td>
                              <td>'.$fila['tipo'].'</td>
                            </tr>';
                          };
                        };
                      }
                      ?>
                    </tr>
                  </tbody>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
