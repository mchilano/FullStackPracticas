


window.onload = function(){
var consulta = document.querySelector('ul');

for(consultas of consulta.children) {
  console.log(consultas);
}

var consulta2 = document.querySelector('li');

console.log(consulta2.parentElement);


var titulo = document.querySelector('h1');

titulo.innerHTML='<em>Javascript is the best my friends!</em>';

console.log(titulo);


var parrafos = document.querySelectorAll('p');

var numero=0;
for(pa of parrafos){
  numero++;
  if(numero%2 === 0){
    pa.innerText = 'Parrafo numero' + numero;
  }
}

}
