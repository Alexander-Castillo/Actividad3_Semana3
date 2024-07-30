<?php
#   Problema de Bucle Anidado:
#   Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide.
function ImprimirPiramide($n){
    # $n son los numeros de niveles de la piramide
    #imprimir espacios en blanco antes de *
    for ($i=0; $i <= $n; $i++) { 
    for ($j= $i; $j < $n; $j++) { 
        echo " ";
    }
        #imprimir *
    for ($k= 1; $k <= (2 * $i - 1); $k++) { 
        echo "*";
    }
    # salto de linea
    echo "\n";
    }
}
$n = 10;

ImprimirPiramide($n);
?>