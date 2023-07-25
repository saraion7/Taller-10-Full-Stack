<?php
// Variables
$number = 0;
$x = 0;

// Proceso
echo "Ingrese el número a multiplicar: ";
fscanf(STDIN, "%d", $number);

while($x <= 30){
    $result = $number * $x;
    echo $number. "x" . $x . " = ". $result . "\n";
    $x++;
}
?>