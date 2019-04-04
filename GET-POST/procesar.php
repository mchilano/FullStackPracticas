<?php

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

 if ($usuario == "mariano" && $password == "mariano") {
   echo  "Bienvenido al sistema!";
 } else {
   echo "Usuario o clave incorrectos";
 }

 ?>
