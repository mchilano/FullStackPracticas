<h1>Bienvenido
  <?php
  //si el usuario que recibo por URL esta vacio...
  if($_GET["usuario"] == ""){
    //completo con "Invitado"
    $_GET["usuario"] = "Invitado";
  }
  //si no esta vacio, muestro el nombre de la URL
  echo $_GET["usuario"];
  ?></h1>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <?php
            //recorro las noticias
            foreach ($noticias as $noticia) {
              //por cada una, agrego el rubro a un array de rubros
              $rubros[] = $noticia[0];
            }


            //uso array_unique para tomar datos unicos del array
            //y que no esten repetidos los rubros
            $rubros = array_unique($rubros);

            //recorro todos los rubros sin repetir
              foreach ($rubros as $rubro) {
                //por cada rubro, empiezo a contar desde cero
                $cantidad = 0;
                //por cada noticia, tomo el rubro
                foreach ($noticias as $noticia) {
                  if($rubro === $noticia[0]){
                    //si el rubro coincide con el rubro de la noticia
                    //sumo uno a la cantidad
                    $cantidad++;
                  }
                }

                //genero el LI del menu haciendo dinamica la URL del href (el GET)
              echo '<li class="nav-item active">
                <a class="nav-link" href="noticias.php?rubro='.$rubro.'&usuario='.$_GET["usuario"].'">'.$rubro.'('.$cantidad.')</a>
              </li>';
              }
             ?>
             <!-- <li class="nav-item active">
               <a class="nav-link" href="noticias.php?rubro=Animales&usuario=Diego">Animales (2)</a>
             </li>
             <li class="nav-item active">
               <a class="nav-link" href="noticias.php?rubro=Deportes&usuario=Juanca">Deportes (5)</a>
             </li> -->
             <?php
             //si el usuario es invitado, muestro el LI para iniciar sesion
             if($_GET["usuario"] == "Invitado"){
               echo '<li class="nav-item active">
                 <a class="nav-link" href="get.php">Iniciar sesion</a>
               </li>';
             }
              ?>

          </ul>
        </div>
      </nav>
