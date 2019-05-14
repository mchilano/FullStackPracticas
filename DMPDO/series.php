<?php
    require('conexion.php');

    $query = $conex->query('SELECT * FROM series');

    $series = $query->fetchAll(PDO::FETCH_ASSOC);

     require_once('plantilla/header.php');
     require_once('plantilla/menu.php');
  ?>
       <section class="principal">
           <article class="nuevas" id="peliculas">
               <div class="peliculas">
               <h2>Series en Digital Movies</h2>

               <ul>
                   <?php
                       foreach ($series as $serie) {
           echo '<a href="serie.php?serie_id='.$serie['id'].'"><li>'.$serie['title']. '</li></a>';
                       }
                   ?>
               </ul>


               </div>
           </article>
       </section>

<?php
require_once('plantilla/footer.php'); ?>
