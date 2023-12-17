<?php

/* Haremos un reto divertido sera asi:
Queremos simular el sistema de donaciones de twitch,
entonces haremos como si el usuario quisiera retirar sus 
donaciones, entonces el usuario tendra que ingresar la cantidad
que quiere retirar, pero twitch solo deja retirar esas donaciones 
si son mayores o iguales a 100 dolares, si tiene esa cantidad o mas
se le podra retirar, si no tiene esa cantidad o mas, no se le podra retirar el dinero


Ejemplo:


*/


$donaciones_a_retirar = readline("Ingrese la cantidad de donaciones que quiere retirar: "."\n");

/*
    En esta línea, se utiliza la función readline() para solicitar al usuario que ingrese 
    la cantidad de donaciones que desea retirar. El valor ingresado se guarda en 
    la variable $donaciones_a_retirar.
*/

switch ($donaciones_a_retirar) {
    case $donaciones_a_retirar >= 100:
       echo "Se le retirara la cantidad de: ".$donaciones_a_retirar." dolares";
        break;
    
    case $donaciones_a_retirar >= 0 && $donaciones_a_retirar < 100:
        echo "No se le podra retirar la cantidad de: ".$donaciones_a_retirar." dolares";
        break;
    
    default:
        echo "Lo que intenta ingresar no esta permitido por favor intente mas tarde";
        break;
}

/*
    En este bloque de código, se utiliza la estructura switch para evaluar el valor de $donaciones_a_retirar 
    y ejecutar diferentes bloques de código dependiendo del caso.

En el primer caso (case $donaciones_a_retirar >= 100), se verifica si el valor de $donaciones_a_retirar es mayor
o igual a 100. Si es así, se muestra un mensaje indicando que se retirará la cantidad ingresada en dólares.

En el segundo caso (case $donaciones_a_retirar >= 0 && $donaciones_a_retirar < 100), se verifica si el valor
 de $donaciones_a_retirar es mayor o igual a 0 y menor que 100. Si se cumple esta condición, se muestra un
  mensaje indicando que no se podrá retirar la cantidad ingresada en dólares.

En el caso default, que se ejecuta si ninguno de los casos anteriores se cumple, se muestra un mensaje
 indicando que el valor ingresado no está permitido y se solicita al usuario que intente nuevamente más
  tarde.
*/


?>