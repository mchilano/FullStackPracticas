
<?php
$title = "Digital Movies - Peliculas Favoritas";
$tituloh1 = "Peliculas del Mundo";
$tituloh2 = "Peliculas Disponibles";
$logo = "images/logo.png";
$logueado = true;
$duracion = 120;
$stars;
$meGusta = true;
$noMeGusta = false;
$peliculaGenero = [ "accion", "animada","romance"];

$ticket = "images/ticket.png";

?>

<?php
  include ("header.php");

 ?>

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
                         echo $stars = str_repeat ('<img class="ranking" src="images/star.png">',3);
                         ?>

           <!-- </label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label> -->

            <label>  <?php
              if ($meGusta) {
                echo '<img class="ranking" src="images/thumb-up-icon.png" alt="">';
              } else {
                echo '<img class="ranking" src="images/thumb-down-icon.png" alt=""></label>';
              }
            ?></label>
            <!-- <img class="estreno" src="images/estreno3.png" alt=""> -->
            <img class="taquillera" src="images/ticket.png" alt="">
           <img class="tresd" src="images/anteojos-3d.png" alt="">

        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/avengers.jpg" alt="">
        <div class="detalle">
          <label>Avengers (May 2018)</label>
          <label>Acción</label>
          <label>Duración: <?php
                               $tiempo = $duracion / 60;
                               echo $tiempo . ' horas'; ?>
                             </label>
          <label><?php
                         $stars;
                         echo $stars = str_repeat ('<img class="ranking" src="images/star.png">',5);
                         ?>
                       </label>
          <!-- <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label> -->

            <label>  <?php
              if ($noMeGusta) {
                echo '<img class="ranking" src="images/thumb-up-icon.png" alt="">';
              } else {
                echo '<img class="ranking" src="images/thumb-down-icon.png" alt=""></label>';
              }
            ?></label>
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
          <label>Duración: <?php
                               $tiempo = $duracion / 60;
                               echo $tiempo . ' horas'; ?>
                             </label>
          <label>
            <?php
                           $stars;
                           echo $stars = str_repeat ('<img class="ranking" src="images/star.png">',5);
                           ?>
          </label>
          <!-- <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label> -->

            <label>  <?php
              if ($meGusta) {
                echo '<img class="ranking" src="images/thumb-up-icon.png" alt="">';
              } else {
                echo '<img class="ranking" src="images/thumb-down-icon.png" alt=""></label>';
              }
            ?></label>
            <!-- <img class="estreno" src="images/estreno3.png" alt=""> -->
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/rogueone.jpg" alt="">
        <div class="detalle">
          <label>Rogue One (Dic 2017)</label>
          <label>Acción</label>
          <label>Duración: <?php
                               $tiempo = $duracion / 60;
                               echo $tiempo . ' horas'; ?>
                             </label>
          <label><?php
                         $stars;
                         echo $stars = str_repeat ('<img class="ranking" src="images/star.png">',5);
                         ?>
                       <!-- </label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label> -->

            <label>  <?php
              if ($noMeGusta) {
                echo '<img class="ranking" src="images/thumb-up-icon.png" alt="">';
              } else {
                echo '<img class="ranking" src="images/thumb-down-icon.png" alt=""></label>';
              }
            ?></label>
            <!-- <img class="estreno" src="images/estreno3.png" alt=""> -->
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/titanic.jpg" alt="">
        <div class="detalle">
          <label>Titanic (Abr 1995)</label>
          <label>Romance</label>
          <label>Duración: <?php
                               $tiempo = $duracion / 60;
                               echo $tiempo . ' horas'; ?>
                             </label>
          <label><?php
                         $stars;
                         echo $stars = str_repeat ('<img class="ranking" src="images/star.png">',5);
                         ?>
                       <!-- </label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label> -->

            <label>  <?php
              if ($meGusta) {
                echo '<img class="ranking" src="images/thumb-up-icon.png" alt="">';
              } else {
                echo '<img class="ranking" src="images/thumb-down-icon.png" alt=""></label>';
              }
            ?></label>
            <!-- <img class="estreno" src="images/estreno3.png" alt=""> -->
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/dragonball.jpg" alt="">
        <div class="detalle">
          <label>Drangon Ball Z (Jul 2005)</label>
          <label>Animada</label>
          <label>Duración: <?php
                               $tiempo = $duracion / 60;
                               echo $tiempo . ' horas'; ?>
                             </label>
          <label><?php
                         $stars;
                         echo $stars = str_repeat ('<img class="ranking" src="images/star.png">',4);
                         ?>
                       <!-- </label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label> -->

            <label>
              <?php
              if ($noMeGusta) {
                echo '<img class="ranking" src="images/thumb-up-icon.png" alt="">';
              } else {
                echo '<img class="ranking" src="images/thumb-down-icon.png" alt=""></label>';
              }
            ?>
            </label>
            <!-- <img class="estreno" src="images/estreno3.png" alt=""> -->
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

      <div class="items">
        <img  class="poster" src="images/emoji.jpg" alt="">
        <div class="detalle">
          <label>Emoji (Oct 2016)</label>
          <label>Animada</label>
          <label>Duración: <?php
                               $tiempo = $duracion / 60;
                               echo $tiempo . ' horas'; ?>
                             </label>
          <label><?php
                         $stars;
                         echo $stars = str_repeat ('<img class="ranking" src="images/star.png">',1);
                         ?>
                       <!-- </label>
          <label> <img class="ranking" src="images/star.png" alt="">
            <img class="ranking" src="images/starblack.png" alt=""> </label> -->

            <label>
              <?php
              if ($meGusta) {
                echo '<img class="ranking" src="images/thumb-up-icon.png" alt="">';
              } else {
                echo '<img class="ranking" src="images/thumb-down-icon.png" alt=""></label>';
              }
            ?>

            <!-- <img class="estreno" src="images/estreno3.png" alt=""> -->
            <img class="taquillera" src="images/ticket.png" alt="">
            <img class="tresd" src="images/anteojos-3d.png" alt="">
        </div>
      </div>

    </div>



<?php
  include("footer.php");
 ?>
