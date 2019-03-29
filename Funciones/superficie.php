<!-- <?php
  function triangulo($base,$altura) {
    return $base*($altura/2);
  }
    echo "La superficie de un triangulo es:".' '.triangulo(50,5);

 ?> -->

<!-- <?php
 function rectangulo($base,$altura) {
   return $base*$altura;
 }
  echo "La superficie de un rectangulo es:".' '.rectangulo(30,20);
 ?> -->

<!-- <?php
function cuadrado($lado) {
  return $lado*$lado;
}
 echo "La superficie de un cuadrado es:".' '.cuadrado(35);

 ?> -->

 <?php

  function circulo($radio) {
    $area = (pi()*($radio*$radio));
    return $area;
  }

  echo "La superficie de un circulo es:".' '.circulo(9);
  ?>
