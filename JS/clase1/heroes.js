
var IronMan = {
  nombre: "Iron Man",
  equipo: "Avengers",
  poderes: [ "Volar", "Lanzar misiles","Disparar laser"],
  energia: 100,
  getPoder: function(numero) {

    if(numero === 0){

      if(this.energia >= 20){
        this.energia = this.energia - 20;
      } else{

         return false;
      }
    }

    if(numero === 1){

      if(this.energia >= 45){
        this.energia = this.energia - 45;
      } else{

         return false;
      }
    }

    if(numero === 2){

      if(this.energia >= 75){
        this.energia = this.energia - 75;
      } else{

         return false;
      }
    }

    return this.poderes[numero];
  }
}

var poder = true;

while (poder = IronMan.getPoder(Math.floor(Math.random()*3)) ) {

    console.log( poder );

    console.log( IronMan.energia );

}


var Hulk = {
  nombre: "Iron Man",
  equipo: "Avengers",
  poderes: [ "Aplastar", "Gritar","Golpear"],
  energia: 100,
  getPoder: function(numero) {

    if(numero === 0){

      if(this.energia >= 45){
        this.energia = this.energia - 45;
      } else{

         return false;
      }
    }

    if(numero === 1){

      if(this.energia >= 15){
        this.energia = this.energia - 15;
      } else{

         return false;
      }
    }

    if(numero === 2){

      if(this.energia >= 25){
        this.energia = this.energia - 25;
      } else{

         return false;
      }
    }


    return this.poderes[numero];
  }
}

var poder = true;

while (poder = Hulk.getPoder(Math.floor(Math.random()*3)) ) {

    console.log( poder );

    console.log( Hulk.energia );

}
