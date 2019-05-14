<?php

 try {

   $conex = new PDO ('mysql:host=localhost;dbname=movies_db;port=3306','root','root');
   // echo '<pre>';
   // var_dump($conex);

 } catch(PDOExcepcion $error) {

   echo $error->getMessage();

 }




 ?>
