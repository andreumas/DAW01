<?php
Class ia{
var $columna;
var $fila;
	
public function getColumna()
    {
		$columna=rand(1,3);
        return $columna;
		
    }
	public function getFila()
    {
		$fila=rand(1,4);
        return $fila ;
    }
}
?>