<?php
//Funciones
function hasSecurityLong($pass){
    return strlen($pass)>= 8;
}

function hasUpperLetter($pass){
    $arrayPass = str_split($pass);
    foreach($arrayPass as $letter){
        if ($letter == strtoupper($letter)){
            return true;
        }
    }
    return false;
}

function hasNumber($pass){
    $arrayPass = str_split($pass);
    foreach($arrayPass as $letter){
        if (is_numeric($letter)){
            return true;
        }
    }
    return false;
}

// Variables
$password = "";

// Proceso

echo "Ingrese la clave a registrar: \n";
fscanf(STDIN, "%s", $password);

if (hasSecurityLong($password)){
    if (hasUpperLetter($password)){
        if (hasNumber($password)) {
            echo "Felicidades! Tu contraseña es segura y ha quedado registrada.";
        } else {
            echo "Tu contraseña no es segura debido a que no tiene al menos un número";
        }
    }else {
        echo "Tu contraseña no es segura debido a que no tiene al menos una letra mayúscula";
    }
} else {
    echo "Tu contraseña no es segura debido a que no tiene al menos 8 caracteres";
}
?>