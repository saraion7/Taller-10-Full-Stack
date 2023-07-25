<?php
// Constante
const TICKET = 25000;

// Variables
$memberShipType = "";
$personNumber = 0;

// Proceso
echo "Ingresa tu tipo de membresia: ";
fscanf(STDIN, "%s", $memberShipType);
echo "Ingresa número de personas: ";
fscanf(STDIN, "%d", $personNumber);

$totalPay = $personNumber * TICKET;

if ($memberShipType == "A" || $memberShipType == "B") {
    $totalPay = $totalPay - ($totalPay * 0.3);
} else {
    echo "El usuario no cuenta con la membresía correspondiente para aplicar a un descuento";
}

echo "El total a pagar es: " . $totalPay;
?>