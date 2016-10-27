<?php

class ClaseTelefono
{

  public $color = 'rojo';
  public $tipo = 'empresas';

  public function mostrarColor() {
      echo 'El color del telefono movil es el siguiente:';
      echo $this->color;
        }
  //Setter
  public function setColor($cambiarColor){
    $this->color=$cambiarColor;
  }
  //Getters
  public function getColor(){
    return $this->color;
  }
  public function mostrarTipo() {
      echo $this->tipo;
  }
}
?>
