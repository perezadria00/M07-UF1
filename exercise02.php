<?php

/*1. Se declara una variable con un valor numérico. UƟlizando una estructura switch/case
genera un mensaje que indique a qué día de la semana se corresponde.
a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde
con ningún día.  */

$dia = 2;

switch( $dia ) {

    case 1: 
        echo "Lunes";
        break;
        case 2:
            echo "Martes";
            break;
            case 3:
                echo "Miércoles";
                break;
                case 4:
                    echo "Jueves";
                    break;
                    case 5:
                        echo "Viernes";
                        break;
                        case 6:
                            echo "Sábado";
                            break;
                            case 7:
                                echo "Domingo";
                                break;
}