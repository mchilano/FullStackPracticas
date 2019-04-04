<?php

//si el indice "archivo" de la superglobal existe...
if(isset($_FILES["archivo"])){
  //si el dato de error es OK...
  if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
    //guardo el nombre del archivo
    $nombre = $_FILES["archivo"]["name"];
    //guardo el nombre temporal del archivo
    $origen = $_FILES["archivo"]["tmp_name"];
    //uso la informacion del path que es la url, para tomar y guardar la extension
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);

    $destino = "/";
    $destino = $destino."archivos/";
    //genero la ruta donde guardo el archivo
    $destino = $destino."archivoNuevo.".$ext;

    //guardo el archivo con esta funcion
    move_upload_file($origen,$destino);

  }


}else{
    echo "error";
}

 ?>
