<?php
/**Andreu Mas
 *
 */
class CalculoGym
{
//Declaracion de variables
  private $sociosh=[];
  private $sociosm=[];
//Hombres
  public function nuevoSocio($socioh){
    if($socioh>0) $this->sociosh[]=$socioh;
  }

  public function mediaSocios(){
    $total=0;
    foreach ($this->sociosh as $key => $value) {
      $total=$total+$value;
    }
    return array_sum($this->sociosh)/count($this->sociosh);
  }



  //Mujeres
  public function nuevoSocio($sociom){
    if($sociom>0) $this->sociosm[]=$sociom;
  }

  public function mediaSocios(){
    $total=0;
    foreach ($this->sociosh as $key => $value) {
      $total=$total+$value;
    }
    return array_sum($this->sociosh)/count($this->sociosh);
  }
}

 ?>
