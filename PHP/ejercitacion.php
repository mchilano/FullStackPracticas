<!-- <?php

for ($i=1; $i <= 100 ; $i++) {
  echo $i."<br>";
}

?> -->


<!-- <?php
$aleatorio = rand(0,100);

for ($i=0; $i <= $aleatorio ; $i++) {
  echo $i."<br>";
}

 ?> -->


<!-- <?php

$i=100;

while ($i >= 85) {
  echo $i."<br>"; $i--;
  // code...
}

 ?> -->


 <!-- <?php
    $cara = 0;
    $ceca = 1;


    while ($cara < 5) {
      $moneda= rand(0,1);

      if ($moneda == 0){
        $cara ++;

      }

    }
       echo $cara;
  ?> -->


  <?php

  $ceu = [
  "Argentina"=> ["Buenos Aires", "Córdoba", "Santa Fé"],
  "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
  "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
  "Francia" => ["Paris", "Nantes", "Lyon"],
  "Italia" => ["Roma", "Milan", "Venecia"],
  "Alemania" => ["Munich", "Berlin", "Frankfurt"]
  ];


   foreach ($ceu as $pais => $ciudades) {
     echo "Las ciudades de ".$pais. ' son:<br><ul>';
     foreach ($ciudades as $ciudad) {
       echo '<li>'.$ciudad. '</li>';
     }
     echo '</ul>';

   }



   ?>
