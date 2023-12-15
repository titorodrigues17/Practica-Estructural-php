<?php
// Veremos en esta seccion algunas de las diferentes funciones de un array

$edades = [12, 34, 56, 78, 90, 12, 34, 56, 78, 90];
// indices[0, 1, 2, 3, 4, 5, 6, 7, 8, 9] --> 10 elementos

//count nos devuelve la cantidad de elementos que tiene un array
echo count($edades)."\n";

//array_push nos permite agregar un elemento al final del array

array_push($edades, 100); //agregamos el numero 100 al final del array
array_push($edades,0); //agregamos el numero 0 al final del array
print_r($edades);  //imprimimos el array para ver los cambios


//is_array nos permite saber si una variable es un array
$a = "Soy un string";
$b = 1;
$c = true;

var_dump (is_array($a)); //false❎
var_dump (is_array($b)); //false❎
var_dump (is_array($c));//false❎
var_dump (is_array($edades)); //true ✅


//explode nos permite convertir un string en un array

$lista_de_frutas = "fresa, manzana, pera, uva, sandia, melon"; //esta variable es un string
$lista_de_frutas_array = explode(", ", $lista_de_frutas); //convertimos el string en un array con la funcion explode
//notamos que el primer parametro de la funcion explode es el separador que usaremos para separar los elementos del array
print_r($lista_de_frutas_array); //[0] => fresa ....

//otro ejemplo

$lista_del_mercado = "arroz - leche - huevos - pan - queso - jamon"; //esta variable es un string
$lista_del_mercado_array = explode("- ", $lista_del_mercado); // notamo que el separador es "- " como primer parametro de nuestra funcion explode
print_r($lista_del_mercado_array); //[0] => arroz ....

 
//implode nos permite convertir un array en un string

$lista_de_frutas_array2 = ["fresa", "manzana", "pera", "uva", "sandia", "melon"]; //esta variable es un array
$lista_de_frutas2 = implode(", ", $lista_de_frutas_array2); //convertimos el array en un string con la funcion implode
//notamos que el primer parametro de la funcion implode es el separador que usaremos para separar los elementos del string
print_r(($lista_de_frutas2)."\n"); //fresa, manzana, pera, uva, sandia, melon

//otro ejemplo

$lista_del_mercado_array2 = array ("arroz" , "leche" , "huevos" , "pan" , "queso" , "jamon"); //esta variable es un array
$lista_del_mercado2 = implode("- ", $lista_del_mercado_array2); // notamo que el separador es "- " como primer parametro de nuestra funcion implode
print_r($lista_del_mercado2); //arroz - leche - huevos - pan - queso - jamon


?>