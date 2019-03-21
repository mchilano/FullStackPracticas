
<?php
$title = "Digital Movies - Peliculas Favoritas";
$tituloh1 = "Peliculas del Mundo";
$tituloh2 = "Peliculas Disponibles";
$logo = "images/logo.png";
$logueado = true;
$duracion = 120;
$stars;

?>

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

    <h1 class="centrar">
      <?php
      echo $tituloh1;
      ?> </h1>

    <div id="redes">
      <ul>
        <li><a href="http://facebook.com" target="_blank"><img src="images/fb.png" alt=""></a></li>
        <li><a href="http://instagram.com" target="_blank"><img src="images/inst.png" alt=""></a></li>
        <li><a href="http://twiter.com" target="_blank"><img src="images/tw.png" alt=""></a></li>
        <li><a href="http://snapchat.com" target="_blank"><img src="images/snp.png" alt=""></a></li>
      </ul>
    </div>

    <div>
      <ul>
        <li><a href="listarPelis.html">Acción</a></li>
        <li><a href="listarPelis.html">Comedia</a></li>
        <li><a href="listarPelis.html">Terror</a></li>
        <li><a href="listarPelis.html">Aventura</a></li>
        <li><a href="listarPelis.html">Romance</a></li>
        <li><a href="listarPelis.html">Triller</a></li>
      </ul>
    </div>


      <h2>
        <?php echo $tituloh2

        ?></h2>

    <div class="contenedor-pelis">
      <div class="items">
        <img class="poster" src="images/avatar.jpg" alt="">
        <div class="detalle">
          <label>Avatar (2002)</label>
          <label>Acción</label>
          <label>Duración:  <?php
                               $tiempo = $duracion / 60;
                               echo $tiempo . ' horas'; ?>
                              </label>
          <label>Rating:<?php
                         $stars;
                         echo $stars = str_repeat ('<img class="ranking" src="images/star.png">',5);
                         ?>

           </label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/avengers.jpg" alt="">
        <div class="detalle">
          <label>Avengers (May 2018)</label>
          <label>Acción</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/moana.jpg" alt="">
        <div class="detalle">
          <label>Moana (Mar 2016)</label>
          <label>Animadas</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/rogueone.jpg" alt="">
        <div class="detalle">
          <label>Rogue One (Dic 2017)</label>
          <label>Acción</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/titanic.jpg" alt="">
        <div class="detalle">
          <label>Titanic (Abr 1995)</label>
          <label>Romance</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/dragonball.jpg" alt="">
        <div class="detalle">
          <label>Drangon Ball Z (Jul 2005)</label>
          <label>Animada</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/emoji.jpg" alt="">
        <div class="detalle">
          <label>Emoji (Oct 2016)</label>
          <label>Animada</label>
          <label>Duración: 120 min</label>
          <label>Rating: 5</label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label>

            <label><img class="ranking" src="images/thumb-up-icon.png" alt="">
            <img class="ranking" src="images/thumb-down-icon.png" alt=""></label>
            <img class="estreno" src="images/estreno3.png" alt="">
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

    </div>



    <div id="piePagina">
      <ul>

        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="galeria.html">Galeria</a></li>

        <?php
        if ($logueado) {
          echo '<li><a href="perfil.html">Mi Perfil</a></li>';
        } else {
          echo '<li><a href="registro.html">Registrate</a></li>
          <li><a href="login.html">Login</a></li>';
        }
        ?>

      </ul>
    </div>


  </div>
  </body>
</html>
