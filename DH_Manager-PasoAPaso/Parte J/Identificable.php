<?php
namespace MiApp;

trait Identificable {

  Private $nombre;
  Private $apellido;

  public function getNombre()
  {
      return $this->nombre;
  }

  public function setNombre($nombre)
  {
      $this->nombre = $nombre;

  }

  public function getApellido()
  {
      return $this->apellido;
  }

  public function setApellido($apellido)
  {
      $this->apellido = $apellido;
  }

  public function getNombreCompleto() {
    return "El nombre es ".this->getNombre()."y su apellido es".this->getApellido();
  }


}
