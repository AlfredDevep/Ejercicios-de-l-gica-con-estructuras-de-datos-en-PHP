<?php

    /**
     * Crea un script que sume todos los números pares en un array de números enteros.
     */  
    
    function suma_numeros_pares($lista){
        $suma = 0;
        foreach($lista as $numero){
            if($numero % 2 == 0){
                $suma += $numero;
            }
        }
        return $suma;
    }

    $lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $suma = suma_numeros_pares($lista);
    print_r("La suma es numeros pares es: " . $suma);

?>