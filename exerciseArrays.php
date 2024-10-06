<?php

/* 

1. Crea un array asociativo con los siguientes datos y claves.
nombre: Sara, apellido: Marơnez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior utilizando foreach. 

*/


$datos_personas = array("Dato 1º" => 'Sara',"Dato 2º" => 'Martínez',"Dato 3º" => 23,"Dato 4º" => 'Barcelona');

foreach($datos_personas as $persona => $datos){
    echo $datos . "<br>";
}

echo "<br>";

/*

2. Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
foreach.

*/

$datos_personas = array("Nombre" => 'Sara',"Apellido" => 'Martínez',"Edad" => 23,"Ciudad" => 'Barcelona');


foreach($datos_personas as $persona => $datos){
    echo $persona . ": " . $datos . "<br>";
}

echo "<br>";

//3. Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.

$datos_personas["Edad"] = 24;

foreach($datos_personas as $persona => $datos){
    echo $datos . "<br>";
}

echo "<br>";

// 4.) Borra la ciudad del array y vuelve a mostrar toda su información usando la función var_dump. 


$datos_personas = array("Nombre" => 'Sara',"Apellido" => 'Martínez',"Edad" => 24);
var_dump($datos_personas);

echo "<br>";

/*

5. Crear un nuevo array con un valor separado por coma a partir de la cadena de texto
$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
información en orden descendente

*/

$letters = "a,b,c,d,e,f";
$array = explode(",", $letters);
rsort($array);
print_r($array);

echo "<br>";

/*

6. Un profesor quiere registrar las notas de su clase en un array asociativo. Las notas son
las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
Guarda los datos en un array asociativo en el orden previo y muéstralos ordenados de
mayor a menor.

*/


$notas = array ("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
arsort($notas);

foreach($notas as $alumnos => $orden_descendente){
    echo "$alumnos: " . $orden_descendente . "<br/>";
}

echo "<br>";

/*

7. Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media. 


*/

$suma = array_sum($notas); //Sumamos todos los valores del array y lo almacenamos en una variable
$cantidad = count($notas); //Contamos cuántos valores hay y lo almacenamos en una variable
$media = $suma / $cantidad; //Dividimos para obtener la media

echo "La media de las notas con 2 decimales es de: " . number_format($media, 2) . "<br><br>"; //Formateamos para que imprima el resultado por pantalla con 2 decimales

echo "Los alumnos con notas por encima de la media son: " . "<br><br>";

foreach($notas as $alumnos => $orden_descendente){
    if ($orden_descendente > $media){
        echo  $alumnos . "<br>";
    }
}

echo "<br>";

/*

Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
array. 

*/

foreach($notas as $alumnos => $orden_descendente){
    if ($orden_descendente == max($notas)){
        echo "El/la alumno/a con la nota más alta es " . $alumnos . ", con una nota de: ". $orden_descendente;
    }
}












