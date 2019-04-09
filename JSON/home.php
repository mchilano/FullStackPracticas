<?php

session_start();

if (isset($_SESSION['nombre'])) {
  echo "Bienvenido". $_SESSION['NOMBRE'];

} else {

  header("LOCATION=lohin.php");
}

 ?>

 <a href="cerrarSesion.php"></a>
