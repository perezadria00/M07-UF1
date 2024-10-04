<?php

// 1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las variables y los resultados de sus operaciones. 

$num1 = 6;
$num2 = 2;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$division = $num1 / $num2;

echo "El resultado de la suma -> " . $num1 . " + " . $num2 . " es: " . $suma . "<br>";
echo "El resultado de la resta -> " . $num1 . " - " . $num2 . " es: " . $resta . "<br>";
echo "El resultado de la división -> " . $num1 . " / " . $num2 . " es: " . $division . "<br>";

//2. Muestra cuál es mayor, cuál menor o si son iguales. 

if ($num1 > $num2) {

    echo "El número " . $num1 . " es mayor que el número " . $num2 . "." . "<br>";

}elseif ($num1 < $num2){
    echo "El número " . $num1 . " es menor que el número " . $num2  . "." . "<br>";
}else{
    echo "Ambos números son iguales." . "<br>";
}

//3.  Si las dos variables son valores superiores a 1,  calcula el área del triángulo con base y altura igual a los valores de las variables. 

if ($num1 > 1 && $num2 > 1){

    $area = ($num1 * $num2)/2;

    echo "El área del triángulo es de: " . $area . "cm.";
}





