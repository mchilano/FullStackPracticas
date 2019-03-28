
<!-- <?php

 function mayor($num1,$num2,$num3){

   if($num1 > $num2 && $num1 > $num3) {
   return $num1;
 }
   if($num2 > $num1 && $num2 > $num3) {
   return $num2;
 }
   if($num3 > $num1 && $num3 > $num2) {
   return $num3;
 }

}

echo mayor(4,18,10);

?> -->


<!-- <?php
  function tabla($base,$limite) {
    for ($i=$base; $base<=$limite;$base++) {
      $secuencia[] = $base;
    }
    return $secuencia;
  }

  var_dump(tabla(1,6));

 ?> -->


 <!-- <?php

 $numeroMagico = 33;

  function mayorN($num1,$num2,$num3='') {

    global $numeroMagico;

    if ($num3='') {
      $num3 = $numeroMagico;
    }

    if($num1 > $num2 && $num1 > $num3) {
    return $num1;
  }
    if($num2 > $num1 && $num2 > $num3) {
    return $num2;
  }
     if($num3 > $num1 && $num3 > $num2) {
  return $num3;
  }

  }
    echo mayorN(4,20);

 ?> -->


 <?php

  $numeroMagico = 33;

 function tabla2($base,$limite='') {
   global $numeroMagico;

   if ($limite='') {
     $limite= $numeroMagico;
   }
   for ($i=$base; $base<=$numeroMagico;$base++) {
     $secuencia[] = $base;
   }
   return $secuencia;
 }

 var_dump(tabla2(10));

  ?>
