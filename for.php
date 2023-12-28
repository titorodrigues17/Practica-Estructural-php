<?php

/*
El ciclo for se compone de tres partes: la inicialización, 
la condición y la expresión de actualización. 
Estas partes se utilizan para controlar la ejecución
 del ciclo y determinar cuántas veces se repetirá el 
 bloque de código.
*/
 //Estructura del for
for( ; ; ){
    //Escribir todo nuestro codigo
}

//Inicializacion del for

for($contador = 0 ; ; ){
    ////Escribir todo nuestro codigo
}

//Condicion del for

for($contador = 0 ;$contador < 10 ; ){
    ////Escribir todo nuestro codigo
}

// Accionables del for

for($contador = 0 ;$contador < 10 ; $contador = $contador + 1 ){
    ////Escribir todo nuestro codigo
    echo $contador . "\n"; // salida cuenta de 0 hasta 9
}

//Realizar un temporizador ahora no que aumente si no que disminuya

for($contador = 10 ;$contador > 0 ; $contador-- ){
    ////Escribir todo nuestro codigo
    echo $contador . "\n"; // salida cuenta de 10 hasta 0 de forma descendente
}


for ($i=0 , $j = 0; $i < 10; $i++, $j += 2) { 
    echo "i = $i j = $j" . "\n"; // salida la i aumentara de 1 en 1 hasta llegar a 9 en cambio la j aumentara de dos en dos hatsa llegar a 18
}





?>
