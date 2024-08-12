<?php

/**
 * Escribe un programa que utilice bucles anidados 
 * para imprimir un patrón de asteriscos en forma de pirámide.
 */

function piramide($n){
    for($i = 0; $i < $n; $i++){
        for($j = 0; $j < $n - $i; $j++){
            echo " ";
        }
        for($k = 0; $k < 2 * $i + 1; $k++){
            echo "*";
        }
        echo "\n";
    }
}   

piramide(30);    

?>