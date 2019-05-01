<?php

class Profesor{
  private $especialidad;
  private $sueldoPorHora;

  public function getEspecialidad(){
    return $this->especialidad;
  }

  public function setEspecialidad($especialidad){
    $this->especialidad = $especialidad;
  }

  public function getSueldoPorHora(){
    return $this->sueldoPorHora;
  }

  public function setSueldoPorHora($sueldo){
    $this->sueldoPorHora = $sueldo;
  }
}


 ?>
