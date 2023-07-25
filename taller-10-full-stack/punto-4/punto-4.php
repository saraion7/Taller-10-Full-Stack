<?php
// Variables
$firstName;
$lastName;

// Proceso

echo "Ingresa tu nombre: \n";
fscanf(STDIN, "%s",$firstName);
echo "Ingresa tu apellido: \n";
fscanf(STDIN, "%s",$lastName);

$fullName = $firstName ." ". $lastName;

echo "Nombre completo:". "\n". $fullName;
?>