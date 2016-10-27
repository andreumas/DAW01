<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>kino</title>
  </head>
  <body>
    <?php
    //metemos el archivo Telefonos
    include 'ClaseTelefono.php';

    $Telefono = new ClaseTelefono();
    //get
    $colorTelefono1='';
    $colorTelefono=$Telefono->getColor();
    echo "el codigo  colorTelefono:".$colorTelefono;
    //Setter
    $Telefono1->setColor('azul');
    $colorVerde='Verde';
    $colorTelefono=$Telefono1->getColor();
    echo "el codigo colorTelefono ahora:".$colorTelefono;
    $Telefono1->setColor($colorVerde);
    echo "el codigo colorTelefono ahora:".$Telefono1->getColor();
     ?>
  </body>
</html>
