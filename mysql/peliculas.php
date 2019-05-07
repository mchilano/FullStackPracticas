<?php
   require ('conexion.php');


   $query = $conex->query('select * from movies');

   $resultados = $query->fetchall(PDO::FETCH_ASSOC);

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>

    <div class="">
      <ul>
        <?php
             foreach ($resultados as $movies) {
                 echo '<li>'.$movies['title']."  ".$movies['genre_id'].'</li>';
             }
         ?>
      </ul>

    </div>


  </body>
</html>
