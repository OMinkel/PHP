<?php
$dia[0] = "Domingo";
$dia[1] = "Lunes";
$dia[2] = "Martes";
$dia[3] = "Miercoles";
$dia[4] = "Feliz Jueves";
$dia[5] = "Viernes";
$dia[6] = "Sabado";

for ($i=0; $i <= 6; $i++) { 
    echo "$dia[$i] <br>";
}

$dia2 = array("Domingo","Lunes","Martes","Miercoles","Feliz Jueves","Viernes","Sabado");

foreach ($dia2 as $key => $value) {
    echo "$value <br>";
}

echo count($dia2);

?>