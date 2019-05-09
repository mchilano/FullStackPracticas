<?php
    require('conexion.php');

    $query = $conex->query('SELECT * FROM series WHERE id = '.$_GET['id']);

    $resultado = $query->fetch(PDO::FETCH_ASSOC);

    //var_dump($resultado); exit;

    require_once('plantilla/header.php');
    require_once('plantilla/menu.php');
 ?>
       <section class="principal">
           <article class="nuevas" id="series">
               <div class="series">
               <h2><?php echo $resultado['title'] ?></h2>

                <div class="">
                    Release Date:<?php echo $resultado['release_date'] ?>
                </div>
                <div class="">
                    Release Date:<?php echo $resultado['end_date'] ?>
                </div>
                <div class="">
                    Genre:<?php echo $resultado['genre_id'] ?>
                </div>
                

               </div>
           </article>
       </section>
   </div>

<?php
require_once('plantilla/footer.php'); ?>
