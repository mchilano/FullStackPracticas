<?php
//var_dump($_POST);

//creacion de variables a usar
$errorNombre = "";
$errorApellido = "";
$errores = 0;
$todosLosErrores = [];

if($_POST){
  //DIO TRUE, VALIDA
  //validacion de nombre
  if($_POST['nombre'] == ""){
    $errorNombre = "Completa tu nombre por favor.<br>";
    $errores++;
    $todosLosErrores[] = "Completa tu nombre por favor.<br>";
  }else if(strlen($_POST['nombre']) < 3 ){
    $errorNombre = "Por favor, corrija su nombre.";
    $errores++;
    $todosLosErrores[] = "Por favor, corrija su nombre.";
  }

  //validacion de apellido
  if($_POST['apellido'] == ""){
    $errorApellido = "Completa tu apellido por favor.<br>";
    $errores++;
    $todosLosErrores[] = "Completa tu apellido por favor.<br>";
  }

  // if($errorNombre == "" && $errorApellido == ""){
  //   header("Location:Animales.php");
  // }
  // if($errores == 0){
  //   header("Location:Animales.php?usuario=Diego");
  // }
  if(count($todosLosErrores) == 0){
    header("Location:noticias.php?usuario=");
  }
}

 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de mi sitio</title>
  </head>
  <body>
    <form class="" action="" method="post">
      Nombre:<input type="text" name="nombre" value="<?php echo $_POST['nombre']; ?>">
      <span style="color:red;font-size:10px;"><?php echo $errorNombre; ?></span>
      <br>
      Apellido:<input type="text" name="apellido" value="">
      <span style="color:red;font-size:10px;"><?php echo $errorApellido; ?></span>
      <br>
      <input type="submit" value="Registrarse">
    </form>
  </body>
</html>
