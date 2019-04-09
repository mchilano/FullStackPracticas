<!-- <?php

$error = "";
if ($_POST) {
  if ($_POST['usuario'] == "") {
    $error = "Usuario incorrecto";
  } else {
    if(strlen($_POST['nombre']) < 3) {
      $error = "Cantidad caracteres minimos incorrectos";
    }
  }
}

?> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>

  </head>


  <body>



  <h1>FORMULARIO DE VALIDACION</h1>


    <form class="" action="procesar.php" method="POST">
      <p>
        Usuario <input type="text" name="usuario" value="">
      </p>
      <p>
        Password <input type="password" name="password" value="">
      </p>
      <p>
        Email <input type="email" name="Email" value="">
      </p>
      <p>
        Edad <input type="number" name="Edad" value="">
      </p>
      <p>
        Nacionalidad <input type="text" name="Nacionalidad" value="">
      </p>
      <p>
        Genero <input type="radio" name="Genero" value="M">Masculino
        <input type="radio" name="Genero" value="F">Femenino
      </p>
      <br>
      <p> <button type="submit" name="button" value="Registrarse">
        Registrarse
      </button>
    </p>

  </body>
</html>



</form>
