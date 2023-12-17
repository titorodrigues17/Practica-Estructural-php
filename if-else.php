<?php
/**
 * Los condicionales if y else son estructuras de control utilizadas en programación para tomar decisiones basadas en una condición.
 * 
 * El condicional if evalúa una expresión y ejecuta un bloque de código si la expresión es verdadera.
 * Si la expresión es falsa, el bloque de código dentro del if se omite y se continúa con la ejecución del programa.
 * 
 * El condicional else se utiliza junto con el if y se ejecuta cuando la expresión del if es falsa.
 * Proporciona una alternativa de código a ejecutar cuando la condición del if no se cumple.
 */

// Ejemplo 1

$asientos_disponibles = 4; //true
$asientos_disponibles = 0; // false


if($asientos_disponibles > 0) { //la estructura del if es if(condicion) {codigo}
    echo "Hay asientos disponibles"; //el codigo a ejecutar si la condicion es verdadera
} else {                                //la estructura del else es else {codigo}
    echo "No hay asientos disponibles"; //el codigo a ejecutar si la condicion es falsa
}

echo "\n"; //salto de linea

// Ejemplo 2 con else if

// el else if se utiliza para evaluar multiples condiciones


$asientos_disponibles = 4; //primera condicion
$asientos_disponibles = 0; // segunda condicion
$asientos_disponibles = -20; // caso hipoteticamente imposible



if($asientos_disponibles > 0) { 
    echo "Hay asientos disponibles";
} else if($asientos_disponibles == 0) {  //si la primera condicion es falsa, se evalua la segunda
    echo "No hay asientos disponibles";
} else {
    echo "es imposible que suceda esto";
}

echo "\n";





?>