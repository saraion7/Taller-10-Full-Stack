<?php
// Funciones
function suma($num1, $num2) {
    return $num1 + $num2;
}

function resta($num1, $num2) {
    return $num1 - $num2;
}

function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}

function division($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "No se puede dividir entre cero.";
    }
}

// Variables
$num1 = 0;
$num2 = 0;
$operationType = "";

echo "Ingrese el primer número a operar: \n";
fscanf(STDIN, "%d", $num1);
echo "Ingrese el primer número a operar: \n";
fscanf(STDIN, "%d", $num2);

echo "Elija el tipo de operación: \n";
echo "1 ------> Suma \n";
echo "2 ------> Resta \n";
echo "3 ------> Multiplicación \n";
echo "4 ------> División \n";
fscanf(STDIN, "%d", $operationType);

    switch ($operationType) {
        case 1:
            $resultado = suma($num1, $num2);
            break;
        case 2:
            $resultado = resta($num1, $num2);
            break;
        case 3:
            $resultado = multiplicacion($num1, $num2);
            break;
        case 4:
            $resultado = division($num1, $num2);
            break;
        default:
            $resultado = "Operación no válida.";
            break;
    }

    echo "El resultado de la operación es: " . $resultado;
?>