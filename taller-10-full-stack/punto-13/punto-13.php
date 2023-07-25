<?php
// Variables
$arraynumber = array (18, 20, 5, 46, 12);
$sum = 0;

// Proceso
foreach($arraynumber as $number){
    $sum += $number;
}
echo "El resultado de la suma del arreglo es: ".$sum;
?>