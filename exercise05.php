<?php

/*
1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla.
2. Se repita la operación hasta que el total de valores sumados sea superior a 100.
3. Muestra la suma de los valores generados.
4. Muestra el total de números pares e impares generados. 
*/



$suma = 0;
$cont_pares = 0;
$cont_impares = 0;

while ($suma <= 100) {

    $numero = rand(0, 20);

    echo "Número generado: $numero<br>";


    $suma += $numero;


    if ($numero % 2 == 0) {
        $cont_pares++;
    } else {
        $cont_impares++;
    }
}


echo "<br>Suma total: $suma<br>";


echo "Total de números pares: $cont_pares<br>";
echo "Total de números impares: $cont_impares<br>";

