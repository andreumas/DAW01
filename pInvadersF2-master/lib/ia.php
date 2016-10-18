<?php
class ia
{

public $fila = "2";
 public $columna = "3";

//declaracion getcolumna i getfila
public function GetColumna(){
  return $this->fila;

}
public function GetFila(){
 return $this->columna;
}
//setters
public function setColumna($col){
  return $this->columna=$col;
}
  public function setFila($fil){
    return $this->fila=$fil;
}

}




?>
