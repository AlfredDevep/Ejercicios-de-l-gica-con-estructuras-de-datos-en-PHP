<?php

    /**
     * Problema de Lista Invertida: Escribe un programa que tome un array 
     * de números y devuelva una nueva lista que contenga 
     * los mismos elementos en orden inverso.
     */

    /**
     * OPTION 1
     * 
     * function lista_invertida($lista){
        $lista_invertida = array_reverse($lista);
        return $lista_invertida;
    }
     */

    //OPTION 2

    function lista_invertida($lista){
        $lista_invertida = [];
        for($i = count($lista) - 1; $i >= 0; $i--){
            $lista_invertida[] = $lista[$i];
        }
        return $lista_invertida;
    }

    $lista = [1, 2, 3, 4, 5];
    $lista_invertida = lista_invertida($lista);
    print_r($lista_invertida);



?>