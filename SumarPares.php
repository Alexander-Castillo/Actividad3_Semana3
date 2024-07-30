<?php
#  Problema de Suma de Números Pares:
#  Crea un script que sume todos los números pares en un array de números enteros.
function sumarPares($arreglo){
    $suma = 0;#almacenara la suma de los pares
    foreach ($arreglo as $numero) {
        # verificamos si el numero es par se sumara el numero a la suma
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}
$numeros = array(1,2,3,4,5,6,7,8,9,10,11,12,13,15,16,17,18,19,20);
$sumaPares = sumarPares($numeros);

echo "Suma de numeros pares es: " . $sumaPares;