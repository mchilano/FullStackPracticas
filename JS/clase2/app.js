var numero = 3;

for (var i = 0; i <= 45; i++) {
 console.log( 3 + "x" + i +"=" + numero*i);

}

var numero = 3;

switch(numero) {
  case(1):console.log("El numero 1 es impar");
  break;
  case(2):console.log("El numero 2 es par");
  break;
  case(3):console.log("El numero 3 es impar");
  break;
  case(4):console.log("El numero 4 es par");
  break;
  case(5):console.log("El numero 5 es impar");
  break;
  case(6):console.log("El numero 6 es par");
  break;
}


  for(var i = 1; i<=37; i++)
  console.log(Math.floor((Math.random()*(37-1+1)+1)));

  var numero = Math.floor((Math.random()*(37-1+1)+1));
  console.log("Salio este numero = "+ numero);




  var estudiante = {
    nombre : "Mariano",
    curso : "FullStack",
    dni : "32123805",
    email: "mchilano86@gmail.com",
    mostrarDatos : function() {
      return this.nombre+ " "+this.curso+ " "+this.dni + " " +this.email;
    }
  }
   console.log("Los datos del estudiante son:" + " " +estudiante.mostrarDatos());


   var estudiante = {
     nombre : "Mariano",
     curso : "FullStack",
     dni : "32123805",
     email: "mchilano86@gmail.com",
   }

   console.log(estudiante);
   function fromObjectToArray(objeto){
     var array = [];
     for(var prop in objeto){
       console.log(objeto[prop]);
       array.push(objeto[prop]);
     }
     console.log(array);
   }
   fromObjectToArray(estudiante);

   window.onload = function(){
     document.body.style.backgroundColor = 'green';
   }


  window.onload = function() {
    function  cambiarColorDeFondoDelBody(color){
      var fondo1 = 'green';
    if (color != fondo1 ) {
      document.body.style.backgroundColor= color;
      console.log('El fondo se puede cambiar');
      return true;

    } else {

      console.log('No se puede cambiar el fondo');
      return true;

    }
  }
    cambiarColorDeFondoDelBody('green');
  }
