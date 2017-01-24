<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numero socios</title>
  </head>
  <body>
    <?php
    //Andreu Mas
    include "calculosGym.php";

    $gestor=new CalculoGym();

    foreach ($_POST as $key => $value) {
      $gestor->nuevoSocio($value);
    }

    //Calculo de la media
    echo $gestor->mediaSocios();


  foreach ($_POST as $key => $value) {
    $gestor->nuevoSocio($value);
  }
     ?>

  </body>
</html>
