<?php
#Problema de Frecuencia de Caracteres:
#Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena
function frecuenciaCaracteres($cadena){
    $frecuencia =[];
    $longitud = strlen($cadena); #strlen() funcion que obtiene la longitud de una cadena

    for ($i=0; $i < $longitud; $i++) {

        $caracter = $cadena[$i]; #obtiene el valor del caracter en la posicion $i
        #array_key_exists() comprueba si una clave especifica existe en un array
        if (array_key_exists($caracter, $frecuencia)) {
            $frecuencia[$caracter]++; #incrementa la frecuencia
        }else{
            $frecuencia[$caracter] = 1; #inicializa la frecuencia
        }
    }
    return $frecuencia;
}   

$texto = "Comprobando la frecuencia de caracteres en este texto";

$frecuencia = frecuenciaCaracteres($texto);

echo "Frecuencia de caracteres: ";
print_r($frecuencia);
?>