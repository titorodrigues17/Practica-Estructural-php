<?php

function suma($a , $b){
    echo "La suma de $a + $b es: " . $a + $b;
} echo "\n";


$leer_a = (int) readLine("Ingresa el valor de a: ");
$leer_b = (int) readLine("Ingresa el valor de b: ");

suma($leer_a, $leer_b);



//----------------------------------------------

// Como se haria si el usuario solo se envia un argumento en vez de dos

function suma2($a = 0 , $b = 0){ // Si inicializamos un valor por defecto el sistema lo tomara hasta que se modifique ese valor

    echo "La suma de $a + $b es: " . $a + $b;

} echo "\n";

suma2(1); // 1 + 0 = 1

//-----------------------------------------------

//Como juntariamos dos arreglos

$arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];

$concatenados = array_merge($arreglo1 , $arreglo2); // la funcion array_merge concatena los arreglos convirtiendolo en uno solo

print_r($concatenados);

// Otra manera de hacerlo

$resultado = [...$arreglo1 , ...$arreglo2];  //En PHP, el operador de propagación (...) se utiliza para desempaquetar los elementos de un array o iterables dentro de otro array. En este caso, se tienen dos arreglos: $arreglo1 y $arreglo2.

print_r($resultado);


//---------------------------------------------------------



function suma3($a , $b){
    echo "La suma de $a + $b es: " . $a + $b;
} echo "\n";


$numeros = [1, 2];

suma3(...$numeros);

//--------------------------------------------------


function suma_infinita(...$parametros){
$suma = 0;

    foreach ($parametros as $numeros_infinitos) {
        $suma += $numeros_infinitos;
    }

    echo "La sumatoria es: $suma \n";

} echo "\n";


suma_infinita(1,11,15,18);



?>