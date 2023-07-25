<?php
// Variables
$fullName = "";
$age = 0;

// Proceso
echo "Ingresa tu nombre completo: ";
fscanf(STDIN, "%[^\n]", $fullName);

echo "Ingresa tu edad: ";
fscanf(STDIN, "%d", $age);

if ($age < 18) {
    echo "El usuario " . $fullName . " es menor de edad\n";
} else {
    echo "El usuario " . $fullName . " es mayor de edad\n";
}
?>