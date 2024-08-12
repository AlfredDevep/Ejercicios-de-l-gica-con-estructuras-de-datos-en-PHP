<?php

/**
 * Implementa una función que tome una cadena
 *  de texto y devuelva un array asociativo que
 *  muestre la frecuencia de cada carácter en la cadena.
 */

function frecuencia_caracteres($cadena){
    $frecuencia = [];
    for($i = 0; $i < strlen($cadena); $i++){
        $caracter = $cadena[$i];
        if(array_key_exists($caracter, $frecuencia)){
            $frecuencia[$caracter] += 1;
        }else{
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;

}

$cadena = "aurora";

$frecuencia = frecuencia_caracteres($cadena);   
print_r($frecuencia);



?>