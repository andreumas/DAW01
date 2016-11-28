<?php


//Andreu Mas
class ia
{

  public $tipo="nave";
  public $mapaCol=4;
  public $mapaFil=4;
  public $numNaves=3;

public $navesHumano=[];

public $navesIA=[];

  public function getColumna() {
    return $this->mapaCol;
  }
  public function getFila() {
    return $this->mapaFil;
  }
  public function getNave() {
    return $this->numNaves;
  }
  public function getNaveshumano(){
    return $this->navesHumano;
  }

  
  public function getNavesIA(){

 $mover=1;
                    
  foreach ($this->navesIA as $key => &$nave) {
      
      if ($nave["tipo"]=="tipo1") {
         
        foreach ($this->navesHumano as $key => $naveH) {
           if (($nave["fil"]-1)==$naveH["fil"] && ($nave["col"])==$naveH["col"]){
              $mover=0;
            }
          }
       
          if ($mover==1) {
            
            $nave["fil"]=$nave["fil"]-1;
            $nave["col"]=$nave["col"];
          }
        }
      }
   
      return $this->navesIA;
    }

  public function setMapaCol($mapaCol){
      if($mapaCol>3 ){
         $this->mapaCol = 3;
      }elseif ($mapaCol<0) {
        $this->mapaCol = 0;
      }else{
        $this->mapaCol = $mapaCol;
      }
  }
  public function setMapaFil($mapaFil){
      if($mapaFil>3 ){
         $this->mapaFil = 3;
 }    elseif ($mapaFil<0) {
        $this->mapaFil=0;
 }    else{
        $this->mapaFil=$mapaFil;
  }
  }
  public function setNaveHumana($id,$tipo,$col,$fil){
    $this->navesHumano[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }
  public function setNaveIA($id,$tipo,$col,$fil){
    $this->navesIA[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }
 
  public function randompos() {
  $this->columna=rand(0,3);
  $this->fila=rand(0,3);
  }
}
?>