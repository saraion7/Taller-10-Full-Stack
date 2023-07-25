<?php
// Variables
$number = 0;

// Proceso
echo "Ingrese el número a multiplicar: ";
fscanf(STDIN, "%d", $number);

for($x = 0; $x <= 30; $x++){
    $result = $number * $x;
    echo $number. "x". $x . " = ". $result . "\n";
}

?>