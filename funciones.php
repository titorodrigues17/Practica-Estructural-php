<?php
/*
    En PHP, una función es un bloque de código que se puede llamar desde 
    cualquier parte de un programa para realizar una tarea específica. Las 
    funciones permiten organizar y reutilizar el código, lo que facilita el
     desarrollo y el mantenimiento de aplicaciones web
*/


function get_pokemon() {

    $numero_aleatorio = rand(1 , 5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu";
            break;

        case 2:
            echo "Charmander";
            break;
        
        case 3:
            echo "Bulbasaur";
            break;

        case 4:
            echo "Squirtle";
            break;

        default:
            echo "El caracter que acaba de ingresar no es correcto";
            break;
    }
} echo "\n";

get_pokemon();

?>