<?php
/**
 *    Problema de Lista Invertida:
 * Escribe un programa que tome un array de números y devuelva una nueva lista que contenga los mismos elementos en orden inverso
 */
function invertirLista($arreglo){
    # array_reverse(); es una funcion reservada que recibe un array como parametro e invierte el orden de sus elementos
    $arregloReverse = array_reverse($arreglo);

    return $arregloReverse;
}
$numeros = array(10,20,30,40,50,60,70,80,90,100);
$NumInvertidos = invertirLista($numeros);

echo "Lista original: \n";
#es una función en PHP utilizada para imprimir información sobre una variable de una manera que sea legible para los humanos. 
#Es especialmente útil para depurar porque muestra la estructura de arrays y objetos, incluyendo sus valores, de una forma organizada.
print_r($numeros);
echo "Lista invertida: \n";

print_r($NumInvertidos);
?>