<?php
/*
El do-while es una variante especial del bucle while. 
Al contrario que el bucle while, que comprueba la 
condición antes de entrar en el bucle, el bucle 
do-while la evalúa al final del bucle. 

*/



do {
    echo "Esto se ejecuta por lo menos una vez"; //Se ejecutara una vez asi no entre al ciclo while
} while (false); // no hay ciclo


echo "\n";
//-------------------------------------------------------------------------------------------------------------


$usernames = ["carlitos123","Titorodrigues17", "VanyVanesa07"]; // definimos un array con usuarios

do {
   $username = readline("Por favor, ingresar su username");// leemos en consola que usuario inserto

   echo "\n"; // un salto de linea para tener interlineado

} while ( in_array($username, $usernames) ); // en los parametros de while usamos la funcion in_array que como parametros recibe username que es lo que se escribio en la linea y como segundo parametro el array que queremos comparar

echo "\n"; // si existe se repetira el ciclo  y si no lo hace no volvera a preguntar

?>
