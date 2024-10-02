<?php

//1. Genere un número aleatorio entre el 1 y el 6 para simular la tirada de un dado.

$numero_random = rand(1, 6);

echo "Ha salido el número " . $numero_random . ".<br>";

//2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara opuesta. (1:5, 2:6, 3:4) 

switch ($numero_random) {
    case 1:
        echo "Ha salido el número: " . $numero_random . "/" . "uno<br>";
        echo "Su cara opuesta es: " . 5;
        break;
        case 2:
            echo "Ha salido el número: " . $numero_random . "/" . "dos<br>";
            echo "Su cara opuesta es: " . 6;
        break;
        case 3:
            echo "Ha salido el número: " . $numero_random . "/" . "tres<br>";
            echo "Su cara opuesta es: " . 4;
        break;
        case 4:
            echo "Ha salido el número: " . $numero_random . "/" . "cuatro<br>";
            echo "Su cara opuesta es: " . 3;
        break;
        case 5:
            echo "Ha salido el número: " . $numero_random . "/" . "cinco<br>";
            echo "Su cara opuesta es: " . 1;
        break;
        case 6:
            echo "Ha salido el número: " . $numero_random . "/" . "seis<br>";
            echo "Su cara opuesta es: " . 2;
        break;
}

