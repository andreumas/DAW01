<?php

/**
 *Andreu Mas
 */
class areas
{
  //Propiedades e Iniciacion
  private $lado=0;
  private $area=0;



  //Variables act3
  private $alturaprivada=-5;



  function __construct()
  {

  }


  //getters y setters

   public function setLado($lado)
  {
    $this->lado=$lado;
  }

  public function getLado()
 {
   return $this->lado;
 }

 public function getArea()
{
  return $this->area;
}

//Andreu Mas
//Actividad 3 Getters y Setters
//

public function setAlturaprivada($alturaprivada)
{
 $this->alturaprivada=$alturaprivada;

//if del set
 if($alturaprivada<0) {
 echo "Error";
 } //cierre if
 //else
 else($alturaprivada>0) {
   echo "Bien";
 }//cierre else
 }



public function getAlturaprivada()
{
return $this->alturaprivada;
}



}





 ?>
