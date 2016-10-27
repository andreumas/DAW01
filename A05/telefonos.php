<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<title>kino pruebas de clases</title>
</head>
<body>
<?php
    //la añdimos
  include 'ClaseTelefono.php';

  $Telefono1 = new ClaseTelefono();
    $colorTelefono=''; 
  $colorTelefono=$Telefono1->getColor();
  echo $colorTelefono;
    //Modificado
  $colorTelefono='blanco';
    echo "el codigo de colorTelefono:".$colorTelefono;
  $Telefono1->mostrarColor();
    ?>
  </body>
</html>
