<?php
Class ia{
  public $columna;
  public $fila;
  public $mapaCol;
  public $mapaFil;
  public $numNaves;
  public $navesHumano;
  public $navesIA;


function __construct()
{
    $this->navesIA=array();
    $this->navesHumano=array();
      $nave=array("tipo" =>  "","col" => 0,"fil" => 3);
      $nave2=array("tipo" => "","col" => 1,"fil" => 3);
      $nave3=array("tipo" => "","col" => 2,"fil" => 3);
    array_push($this->navesIA, $nave);
    array_push($this->navesIA, $nave2);
    array_push($this->navesIA, $nave3);
}

  public function setMapaCol($mapaCol){
    $this->mapaCol=$mapaCol;
}
  public function setMapaFil($mapaFil){
    $this->mapaFil=$mapaFil;
}

  public function getNavesIA(){
    return $this->navesIA;
}

  public function setNaveHumana($tipo,$col,$fil){
    $nave=array("tipo" => $tipo,"col" => $col,"fil" => $fil);
    array_push($this->navesHumano,$nave);
}

  public function getColumna(){
    return $this->columna;
}

  public function getFila(){
    return $this->fila;
}
  public function setColumna($col)
{
  if($col <= 3 && $col >=0 ){
    $this->columna=$col;
}
  else if($col > 3){
    $this->columna=3;
}
  else if($col < 0){
    $this->columna=0;
}
}
  public function setFila($fil){
    if($fil <= 3 && $fil>=0 ){
      $this->fila=$fil;
}
  else if($fil > 3){
    $this->fila=3;
}
  else if($fil < 0){
    $this->fila=0;
}
}
  public function randompos(){
    $this->fila=rand(0,3);
    $this->columna=rand(0,3);
}

}

?>
