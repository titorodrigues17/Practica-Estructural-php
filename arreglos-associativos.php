<?php

// Los arreglos asociativos son aquellos que tienen un indice personalizado

$estudiantes = array(  // El metodo array() es para declarar un arreglo
    "nombre" => "Carlos Alberto",  // el ""nombre"" es el indice del arreglo y el => es para asignarle un valor
    "apellido" => "Santos Rodriguez", //el valor puede ser de cualquier tipo
    "edad" => 20,
    "carrera" => "Ingenieria en Sistemas Computacionales",
    "semestre" => 7,   
);

// una manera para imprimir un arreglo asociativo seria la siguiente
echo "El nombre del estudiante es: {$estudiantes["nombre"]}"."\n"; // Para acceder a un elemento del arreglo se coloca el nombre del arreglo y entre [] el indice del elemento
// otra forma seria concatenando el string con el valor del elemento del arreglo .$estudiantes["apellido"].
echo "El apellido del estudiante es: ".$estudiantes["apellido"]."\n";
echo "La edad del estudiante es: ".$estudiantes["edad"]."\n";
echo "La carrera del estudiante es: ".$estudiantes["carrera"]."\n";
echo "El semestre del estudiante es: ".$estudiantes["semestre"]."\n";

var_dump($estudiantes); // La funcion var_dump() nos muestra el contenido de una variable en este caso es un arreglo 

//una manera mas sencilla de poder imprimir un arreglo seria

print_r($estudiantes); // La funcion print_r() nos muestra el contenido de una variable en este caso es un arreglo


//--------------------------------------------------------------

// Otra manera de declarar un arreglo asociativo seria la siguiente

$personas = array(
    "persona1" => array( // como vemos el indice del arreglo es persona1 y el valor es otro arreglo
        "nombre" => "Carlos",
        "apellido" => "Santos",
        "edad" => 20,
        "carrera" => "Ingenieria en Sistemas Computacionales",
        "semestre" => 7,
    ),
    "persona2" => array(
        "nombre" => "Juan",
        "apellido" => "Perez",
        "edad" => 20,
        "carrera" => "Ingenieria en Sistemas Computacionales",
        "semestre" => 7,
    ),
    "persona3" => array(
        "nombre" => "Pedro",
        "apellido" => "Gomez",
        "edad" => 20,
        "carrera" => "Ingenieria en Sistemas Computacionales",
        "semestre" => 7,
    ),
);
// para poder imprimir un arreglo asociativo de esta manera seria de la siguiente manera
echo "El nombre de la primera persona es: ".$personas["persona1"]["nombre"]."\n"; // Para acceder a un elemento del arreglo se coloca el nombre del arreglo y entre [] el indice del elemento
// como notamos  accedemos al primer arreglo y a su indice que seria otro arreglo de la misma manera accedemos al indice del arreglo $personas["persona1"]["nombre"]

?>