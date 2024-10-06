<?php

// 1. Se declaran dos variables con valores numéricos superiores a 10
$num1 = 20;
$num2 = 14;

// Muestra la progresión numérica de los números pares desde 0 hasta el valor de la primera con un bucle for.
for($i = 0; $i <= $num1; $i++){
    if ($i % 2 == 0){
        echo $i . "<br>"; // Agregamos un salto de línea
    }
};

echo "<br>"; 

// Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle while.
while($num2 >= 0){
    echo $num2-- . "<br>"; 
}

echo "<br>";

// 4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle do/while:
// a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez el valor de la primera variable.
$num3 = 10;
$num4 = 20;

do {
    if ($num4 < $num3) {
        echo $num3 . "<br>"; // Agregamos un salto de línea
    } else {
        echo $num3++ . "<br>"; // Agregamos un salto de línea
    }
} while ($num3 <= $num4);

?>




     