<?php

/*1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente:
   
    
    - Muestra la progresión numérica desde la primera variable a la segunda con un bucle
      do/while.
    - Si la segunda variable es más pequeña, sólo queremos que imprima una vez
      el valor de la primera variable. */

      $num1 = 20;
      $num2 = 14;

     
//  Muestra la progresión numérica de los números pares desde 0 hasta el valor de la primera con un bucle for.

       for($i = 0; $i <= $num1; $i++){
            if ($i % 2 == 0){
            echo $i . "<br/>";
          }
        }

       
    
//Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle while.

while($num2 >= 0){
  $num2;
  echo $num2-- ."<br>";
}

/* 4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while:
a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez
el valor de la primera variable.*/

$num3 = 10;
$num4 = 20;

do{

  if($num4 < $num3){

    echo $num3;
    
  }else{

    $num3;
    echo $num3++ . "<br>";

  }

 

}while($num3 <= $num4);



     