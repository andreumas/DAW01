<?php
Class ia{
public $columna;
public  $fila;

public function randomPos(){

	$this->columna=rand(1,3);
	$this->	fila=rand(1,3);
}


public function getColumna()
    {

        return $columna;

    }
	public function getFila()
    {
        return $fila ;
    }


		public function setColumna($col)
		    {
		         $this->columna=$col;

		    }
			public function setFila($fil)
		    {

		        $this->fila=$fil ;
		    }
}
?>
