<?php

class Alumno
{
  //Variables
  public $nombre;
    public $edad;
      public $curso;
        public $ciclo;

    //Getter nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEdad()
    {
        return $this->edad;
}
        public function getCurso()
        {
            return $this->curso;
        }

        public function getCiclo()
        {
            return $this->ciclo;
        }

    //Setter nombre
    public function setNombre($nombre){

        $this->nombre=$nombre;
      }

        public function setEdad($edad)
        {
            if($edad>=18){
              $this->edad = $edad;
            }else{
              $this->edad =18;
            }
  }

    public function setCurso($curso)
    {
   if ($curso==1){
        $this->curso=$curso;
      }

    elseif ($curso==2){
        $this->curso=$curso;
      }

     else{
       $this->curso=1;
     }
   }
public function setCiclo($ciclo)
{
  $this->ciclo=$ciclo;
}
}


//variables

$instituto=new Alumno();
echo $instituto-> setNombre("Andreu")."<br>";
echo "nombre". $instituto->getNombre();

echo  $instituto-> setEdad("21") ."<br>";
echo "Edad". $instituto->getEdad();

echo $instituto-> setCurso("2") ."<br>";
echo "Curso". $instituto->getCurso();

echo $instituto-> setCiclo("gg")."<br>";
echo "Ciclo". $instituto->getCiclo();


?>
