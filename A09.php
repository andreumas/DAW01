<?php

echo "Multiplicamos por 5"."<br>";
for ( $i = 0 ; $i <= 10 ; $i ++) {
echo "5x$i=". $i*5 ."<br>" ;
}

echo "El array con foreach:"."<br>";
$tablas =array("primera"=>5,"segunda"=>13,"tercera"=>11);
mostrarTablas($tablas);


function mostrarTablas($tablas){
foreach ($tablas as $indice => $valor) {
        echo ("$indice : $valor<br>") ;
}
}

?>
