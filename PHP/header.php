<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php echo $title;
       ?>

    </title>
    <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <style>

      .contenedor-principal {
        <?php
        if ($logueado)
        {
          ?>
          background: yellow;
          <?php
        }
        else
          {
            ?>
            background: grey;
            <?php
        }
      ?>
    }
    </style>

  </head>
  <body>

  <div class="contenedor-principal">

    <p class="centrar">
      <a href="index.html">
      <img id="logo" src= <?php echo $logo;?> alt="logo Digital Movies">
      </a>
    </p>
