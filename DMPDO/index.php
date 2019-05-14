<?php
require('conexion.php');
$titulo='';
$tituloResultado='';
$idResultado='';
$resultadoBusqueda=[];
$errorBusqueda='';
$tipo='';
if (isset($_GET['tipo'])) {
$query = $conex->query("SELECT * FROM {$_GET['tipo']}");
$resultados= $query->fetchAll(PDO::FETCH_ASSOC);
$titulo=$_GET['title'];
$tipo=$_GET['tipo'];

foreach ($resultados as $resultado) {
  if (strlen(stristr($resultado['title'],$titulo))>0) {
    $tituloResultado=$resultado['title'];
    $idResultado=$resultado['id'];
    array_push($resultadoBusqueda,$tituloResultado,$idResultado);
    } else {
    $errorBusqueda='No se ha encontrado, intente con otro titulo.';
  }
};
//var_dump($resultadoBusqueda); exit;
};

    require_once('plantilla/header.php');
    require_once('plantilla/menu.php');
 ?>

    <section class="principal">
      <article class="banner" style="background-image:url(posters/increibles2.jpg)">

				<div class="slide-caption">
					<h2>Los Increíbles 2</h2> <p class="sc-desc">La familia de superhéroes formada por Míster Increíble y Elastigirl junto a sus tres hijos Violet, Dash y Jack-Jack, protagonizan esta secuela de la película de Pixar <i>Los increíbles</i> (2004). <br><br>Inmediatamente después de lo sucedido en el primer filme, esta familia de superhéroes co...</p>
					<div class="slide-caption-info">
					<div class="block"><strong>Genero:</strong> <a href="#" title="Peliculas de Acción">Acción</a>, <a href="#" title="Peliculas de Aventuras">Aventuras</a>, <a href="#" title="Peliculas de Animación">Animación</a>.</div>
					<div class="block"> <strong>Calidad:</strong> TS </div>
					</div>
					<a href="#" title="Los Increíbles 2 Online"> <div class="btn btn-default mt20 verpelis-animate-zoom">Ver Película</div> </a>
				</div>

      </article>

      <article class="nuevas" id="peliculas">
        <div name='buscador' class="peliculas">
          <h2>Buscador</h2>
          <form class="" action="index.php" method="get">
            <input type="radio" name="tipo" id="movies" value="movies">
            Película
            <input type="radio" name="tipo" id="series" value="series">
            Serie
            <label for="title"></label>
            <input class="form-control form-control-lg" type="text" name="title" placeholder="¿Que vas a ver hoy?">
            <button style="color:black" type="submit">Buscar</button>
          </form>
          <?php

          if ($tipo=='series') {
            echo "<br>Resultado de la busqueda:<br><br><a href='serie.php?serie_id={$resultadoBusqueda[1]}'><h3>".$resultadoBusqueda[0]."</h3></a>";
          } elseif ($tipo=='movies') {
            echo "<br>Resultado de la busqueda:<br><br><a href='detallePelicula.php?id={$resultadoBusqueda[1]}'><h3>".$resultadoBusqueda[0]."</h3></a>";
          } else {echo $errorBusqueda;}
           ?>
        </div>

        <div class="peliculas">
          <h2>Películas más recientes</h2>

          <div class="pelicula">
             <a href="#">
              <img src="posters/guardianesdelagalaxia.jpg" alt="" class="peli-img">
              <img src="images/img-nuevo.png" alt="" class="banderin">
              <h4>Ver más</h4>
              <h3 class="peli-titulo">Guardianes de la Galaxia</h3>
            </a>
          </div>

            <div class="pelicula">
              <a href="#">
                <img src="posters/avengers.jpg" alt="" class="peli-img">
                <img src="images/img-nuevo.png" alt="" class="banderin">
                <h4>Ver más</h4>
                <h3 class="peli-titulo">Avengers</h3>
              </a>
            </div>

            <div class="pelicula">
              <a href="#">
                <img src="posters/starwars2.jpg" alt="" class="peli-img">
                <img src="images/img-nuevo.png" alt="" class="banderin">
                <h4>Ver más</h4>
                <h3 class="peli-titulo">Star Wars</h3>
              </a>
            </div>

        </div>

      </article>


      <article class="tres-d" id="peliculas">

        <div class="peliculas">
          <h2>Películas gratuitas</h2>

          <div class="pelicula">
            <a href="#">
              <img src="posters/corazonvaliente.jpg" alt="" class="peli-img">
              <img src="images/img-gratis.png" alt="" class="banderin">
              <h4>Ver más</h4>
              <h3 class="peli-titulo">Corazón Valiente</h3>
            </a>
          </div>

            <div class="pelicula">
              <a href="#">
                <img src="posters/piratasdelcaribe.jpg" alt="" class="peli-img">
                <img src="images/img-gratis.png" alt="" class="banderin">
                <h4>Ver más</h4>
                <h3 class="peli-titulo">Piratas del Caribe</h3>
              </a>
            </div>

            <div class="pelicula">
              <a href="#">
                <img src="posters/thorragnarok.jpg" alt="" class="peli-img">
                <img src="images/img-gratis.png" alt="" class="banderin">
                <h4>Ver más</h4>
                <h3 class="peli-titulo">Thor</h3>
              </a>
            </div>

        </div>

      </article>

      <article class="gratuitas" id="peliculas">

        <div class="peliculas">
          <h2>Películas 3D</h2>

          <div class="pelicula">
            <a href="#">
              <img src="posters/intensamente.jpg" alt="" class="peli-img">
              <img src="images/3d-icon.png" alt="" class="banderin">
              <h4>Ver más</h4>
              <h3 class="peli-titulo">Intensamente</h3>
            </a>
          </div>

            <div class="pelicula">
              <a href="#">
                <img src="posters/civilwar.jpeg" alt="" class="peli-img">
                <img src="images/3d-icon.png" alt="" class="banderin">
                <h4>Ver más</h4>
                <h3 class="peli-titulo">Civil War</h3>
              </a>
            </div>

            <div class="pelicula">
              <a href="#">
                <img src="posters/capitanamerica.jpg" alt="" class="peli-img">
                <img src="images/3d-icon.png" alt="" class="banderin">
                <h4>Ver más</h4>
                <h3 class="peli-titulo">Capitán América</h3>
              </a>
            </div>

        </div>

      </article>


    </section>
<?php
require_once('plantilla/footer.php');
 ?>
