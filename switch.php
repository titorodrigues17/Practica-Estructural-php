<?php
/*
*El bloque de código que has compartido es el comienzo de un archivo PHP, 
*pero no contiene ninguna lógica o instrucciones específicas. Sin embargo, 
*puedo explicarte el uso del bloque de control switch y darte algunos 
*ejemplos de situaciones en las que es preferible utilizar switch en 
*lugar de if.

*El bloque de control switch en PHP se utiliza para tomar decisiones 
*basadas en múltiples casos posibles. Proporciona una forma más 
*concisa y legible de manejar múltiples condiciones en comparación 
*con una serie de declaraciones if anidadas.
*/


//ejemplo

// lunes : estudio
// martes : practicas
// miercoles : trabajo
// jueves : estudio
// viernes : trabajo
// sabado : descanso
// domingo : descanso

$dia = readline("ingresa un dia de la semana: "." \n");

switch($dia) {
    case "lunes":
        echo "estudio";
        break;
    case "martes":
        echo "practicas";
        break;
    case "miercoles":
        echo "trabajo";
        break;
    case "jueves":
        echo "estudio";
        break;
    case "viernes":
        echo "trabajo";
        break;
    case "sabado":
        echo "descanso";
        break;
    case "domingo":
        echo "descanso";
        break;
    default:
        echo "no es un dia de la semana, te equivocaste de planeta";
        break;
}


?>