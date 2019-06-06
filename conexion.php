<?php
  $usuario = "ayudami-usuario";
  $contrasena = "12345";
  $host = "localhost";
  $bd = "ayudami";

  $enlace = new mysqli($host,$usuario,$contrasena,$bd);

  if ($enlace->connect_error) {
    die("<p>Ocurrió un error, verifica si Existe la Base de datos</p>");
  }

  if (isset($_POST['boton'])) {

    $ti = $_POST['tipo'];
    $pe = $_POST['persona'];
    $ent = $_POST['entidad'];
    $ed = $_POST['edad'];

    $co = $_POST['correo'];
    $ce = $_POST['cedula'];

    $consulta = ("INSERT INTO formulario
      VALUES ('$ti','$pe','$ent','$ed','$co','$ce')");

      if ($enlace->query($consulta) == true) {
        header("Location: formulario.php");
        if (isset($_POST['entidad'])) {
      		  echo "<body>";
      			echo "<h1>Tu entidad es ".$ent."</h1>";
      			echo "</body>";
      	}
        exit;
      }else{
        echo "Ocurrió un error al enviar la información ".$enlace->error;
      }
 }

if (isset($_POST['boton3'])) {

  session_start();

  $us = $_POST['usuario'];
  $co = $_POST['contrasena'];

  $consulta = ("SELECT COUNT(*) as contar from usuario where nombre = '$us' and contrasena = '$co'");
  $datos = mysqli_query($enlace,$consulta);
  $arreglo = mysqli_fetch_array($datos);
    if ($arreglo['contar'] > 0) {
      $_SESSION['username'] = $us;
      header("Location: area_usuarios.php");
      exit;
    }else{
      echo "Este usuario no Existe".$enlace->error;
    }
}

?>
