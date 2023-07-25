<?php
// Constante
const TICKET = 25000;

// Variables
$memberShipType = 0;
$personNumber = 0;

// Proceso
echo "Ingresa tu tipo de membresia: \n";
echo "1 ------> A \n";
echo "2 ------> B \n";
echo "3 ------> C \n";
echo "4 ------> D \n";
fscanf(STDIN, "%d", $memberShipType);
echo "Ingresa número de personas: ";
fscanf(STDIN, "%d", $personNumber);

$totalPay = $personNumber * TICKET;

switch($memberShipType){
    case 1:
        $totalPay = $totalPay - ($totalPay * 0.3);
        break;
    case 2:
        $totalPay = $totalPay - ($totalPay * 0.25);
        break;
    case 3:
        $totalPay = $totalPay - ($totalPay * 0.1);
        break;
    case 4:
        $totalPay = $totalPay - ($totalPay * 0.05);
        break;
    default:
        echo "No eligió una opción valida \n";
}

echo "El total a pagar es: " . $totalPay;
?>