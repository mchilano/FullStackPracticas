<?php
    require('conexion.php');

    $query = $conex->query('SELECT * FROM series WHERE id = '.$_GET['serie_id']);

    $serie = $query->fetch(PDO::FETCH_ASSOC);

    //var_dump($resultado); exit;

    require_once('plantilla/header.php');
    require_once('plantilla/menu.php');
 ?>
       <section class="principal">
           <article class="nuevas" id="peliculas">
               <div class="peliculas">
               <h2><?php echo $serie['title'] ?></h2>
                  <div class="">
                    Release Date:<?php echo $serie['release_date'] ?>
                </div>
                <div class="">
                    End Date:<?php echo $serie['end_date'] ?>
                </div>

               </div>
           </article>
       </section>
   </div>

<?php
require_once('plantilla/footer.php'); ?>
