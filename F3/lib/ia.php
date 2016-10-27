: <?php

class ia{
public $columna;
public $fila;

public function getColumna()
{
return $this->columna;
}
public function getFila()
{
return $this->fila;
}

public function setColumna($col){
if($col<=3 && $col>=0){
$this->columna=$col;
  }
elseif($col>3){
$this->columna=3;
}
elseif($col<0){
$this->columna=0;
}
}
//fila
public function setFila($fil){
if($fil<=3 && $fil>=0){
$this->fila=$fil;
  }
elseif($fil>3){
$this->fila=3;
}
elseif($fil<0){
$this->fila=0;
}
}
public function randomPos(){
$this->fila=rand(0,3);
$this->columna=rand(0,3);
}
}
?>
