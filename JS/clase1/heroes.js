var IronMan = {
  nombre: "Iron Man",
  equipo: "Avengers",
  poderes: [ "Volar", "Lanzar misiles","Disparar laser"],
  energia: 100,
  getPoder: function(numero) {
    if(numero === 0) {
      this.energia = this.energia - 20;
    }
    return this.poderes[numero];
  }

}

var aleatorio = Math.floor(Math.random()*3);

console.log( IronMan.getPoder(aleatorio) );


var Hulk = {
  nombre: "Iron Man",
  equipo: "Avengers",
  poderes: [ "Aplastar", "Gritar","Golpear"],
  energia: 100,
  getPoder: function(numero) {


    return this.poderes[numero];
  }
}

  var aleatorio = Math.floor(Math.random()*3);

  console.log( Hulk.getPoder(aleatorio) );
