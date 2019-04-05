<!DOCTYPE html>
<?php
// var_dump($_POST);

if($_POST) {

  //guardo lo que recibo del formulario en mis variables
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  //aprovecho para encriptar la contraseña asi no manipulo la contraseña cruda
  $contrasenia = password_hash($_POST['contrasenia'],PASSWORD_DEFAULT);

  //genero un array asociativo para convertir al json
  $usuario["nombre"] = $nombre;
  $usuario["apellido"] = $apellido;
  $usuario["email"] = $email;
  $usuario["contrasenia"] = $contrasenia;
  $usuarioEnJson = json_encode($usuario);
  //guardo el json en un archivo externo
  file_put_contents("usuario.json", $usuarioEnJson);
}


 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
    <form class="" action="" method="post">
<p>
<label for="nombre">Nombre</label>
  <input id="nombre" type="text" name="nombre" value="">
</p>
<p>
  <label for="apellido">Apellido</label>
  <input id="apellido" type="text" name="apellido" value="">
</p>
<p>
  <label for="email">Email</label>
  <input id="email" type="email" name="email" value="">
</p>
<p>
  <label for="password">Contraseña</label>
  <input id="password" type="password" name="contrasenia" value="">
</p>
      <input type="submit" name="" value="Registrarme">


    </form>
  </body>
</html>
