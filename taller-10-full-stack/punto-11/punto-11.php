<?php
// Variables
$number = 0;

// Proceso
for($x = 0; $x <= 100; $x = $x + 2){
    echo $x. "\n";
    $number = $number + $x;
}
echo "El resultado de la suma de todos los números pares es: ".$number;
?>