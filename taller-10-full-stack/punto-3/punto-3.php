<?php
// Variables
$firstNumber = 0;
$secondNumber = 0;

// Proceso

echo "Ingresa el primer número a sumar: \n";
fscanf(STDIN, "%d",$firstNumber);
echo "Ingresa el segundo número a sumar: \n";
fscanf(STDIN, "%d",$secondNumber);

$add = $firstNumber + $secondNumber;

echo "El resultado de la suma es:". "\n". $add;

?>