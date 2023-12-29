<?php
/*
    El reto consiste en mirar la cantida de caminos
    que existen en una serie de casas 

    por ejemplo 

    la casa 1 es donde siempre se debe iniciar
    2 -> 1
    para llegar a la casa 2 hay solo una forma de llegar

    2 -> 1
    3 -> 2
    4 -> 3
    5 -> 5
    6 -> 8
    7 -> 13
    8 -> 21

    Como podemos notar para llegar a la casa 8
    so 21 caminos o lo mismo que sumar la cantidad de caminos
    que hay de la casa 6 y la casa 7 = 8+13 = 21

*/

$numero_de_tienda = 8; // Establece el límite superior de la secuencia de Fibonacci en 8 tiendas.
$anterior = 0; // Inicializa el primer número de la secuencia Fibonacci.
$actual = 1; // Inicializa el segundo número de la secuencia Fibonacci.

for ($i = 2; $i <= $numero_de_tienda; $i++) { 
    // Inicia un bucle para generar los números de la secuencia Fibonacci hasta alcanzar el límite.

    $temporal = $actual; // Almacena temporalmente el valor actual.
    $actual += $anterior; // Calcula el siguiente número sumando el número actual y el anterior.
    $anterior = $temporal; // Actualiza el valor anterior con el valor anterior almacenado.

    echo $actual . "\n"; // Imprime el número actual de la secuencia, seguido de un salto de línea.
}

echo "\n"; // Imprime una línea en blanco después de mostrar todos los números de la secuencia.

?>